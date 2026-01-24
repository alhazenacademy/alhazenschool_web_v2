<?php

namespace App\Jobs;

use App\Models\TrialClass;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendTrialToExternalApi
{
    use Dispatchable, Queueable, SerializesModels;

    public TrialClass $trial;

    public function __construct(TrialClass $trial)
    {
        $this->trial = $trial;
    }

    public function handle(): void
    {
        $trial = $this->trial->load(['program', 'source']);

        $payload = [
            'Phone'         => $trial->phone,
            'Email'         => $trial->email,
            'Program'    => optional($trial->program)->name,
            'KnowFrom'     => optional($trial->source)->name,
            'Device'    => (bool) $trial->has_device,
            'Name'  => $trial->student_name,
            'Age'   => $trial->student_age,
            'Parent'   => $trial->parent_name,
            'TrialDate' => $trial->schedule_date->format('Y-m-d'),
            'TrialTime' => date('H:i', strtotime($trial->schedule_time)),
            'TimeZone' => 'WIB',
            'ClassType' => 'Privat (1 on 1)',
            'Branch' => 'Pusat',
            'Status' => 'Pending',
            'ClassName' => 'Untuk Anak',
            // 'School' => $trial->school,
            // 'Address' => $trial->address,
            // 'PromoCode' => $trial->promoCode,
        ];

        $url = config('services.trial_api.url');

        try {
            $response = Http::timeout(10)
                ->acceptJson()
                ->post($url, $payload);

            if (! $response->successful()) {
                Log::warning('Trial API response not successful', [
                    'trial_id' => $trial->id,
                    'status'   => $response->status(),
                    'body'     => $response->body(),
                ]);
            }
        } catch (\Throwable $e) {
            Log::error('Error while sending trial to external API', [
                'trial_id' => $trial->id,
                'error'    => $e->getMessage(),
            ]);
        }
    }
}
