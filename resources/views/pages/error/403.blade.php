<x-layout
    title="403 — Access Denied | Alhazen School"
    description="You do not have access rights to this page."
    wa-message="Hi, I'm getting a 403 error in Alhazen School Web."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="403"
        title="Access Denied !."
        subtitle="Your account does not have permission to open this page."
        buttonText="Back to Home"
        :buttonHref="route('home', absolute: false)"
        :image="asset('assets/kids/error/img-403.webp')"
        imageAlt="403 Forbidden"
        note="If you feel you should have access, contact the Alhazen admin."
    />
</x-layout>
