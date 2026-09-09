<section id="services" aria-labelledby="services-heading" class="py-2xl-3xl">
  <div class="u-container">
    <h2 id="services-heading">
      Services
    </h2>

    <ul class="mt-l grid gap-l-xl sm:grid-cols-2 lg:grid-cols-3">
      <li>
        <x-service-card name="Service 1"
          href="{{ home_url('/services') }}#service-1"
          description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
      </li>
      <li>
        <x-service-card name="Service 2"
          href="{{ home_url('/services') }}#service-2"
          description="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis." />
      </li>
      <li>
        <x-service-card name="Service 3"
          href="{{ home_url('/services') }}#service-3"
          description="Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint." />
      </li>
    </ul>
  </div>
</section>
