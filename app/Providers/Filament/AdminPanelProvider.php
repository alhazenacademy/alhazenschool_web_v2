<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\OverviewStats;
use App\Filament\Widgets\RecentArticles;
use App\Filament\Widgets\TrialOverview;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Enums\ThemeMode;
use Filament\Pages\Dashboard;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use App\Filament\Pages\Auth\EditProfile;
use Filament\Navigation\NavigationGroup;
use Filament\Widgets\FilamentInfoWidget;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {   
        // Menambahkan tag meta noindex, nofollow pada head panel admin Filament
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn() => '<meta name="robots" content="noindex, nofollow">'
        );

        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->profile(EditProfile::class, isSimple: false)
            ->favicon(asset('assets/logo.webp'))
            ->brandLogo(asset('assets/cms-logo.webp'))
            ->brandName('Alhazen Academy CMS')
            ->colors([
                'primary' => Color::hex('#059669'),
            ])
            ->defaultThemeMode(ThemeMode::System)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            // ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                    // AccountWidget::class,
                TrialOverview::class,
                OverviewStats::class,
                RecentArticles::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Dashboard')
                    ->collapsed(false),

                NavigationGroup::make()
                    ->label('Trial Class'),

                NavigationGroup::make()
                    ->label('Academy'),

                NavigationGroup::make()
                    ->label('Content'),

                NavigationGroup::make()
                    ->label('Master Data'),

                NavigationGroup::make()
                    ->label('Filament Shield'),
            ]);
        ;
    }
}
