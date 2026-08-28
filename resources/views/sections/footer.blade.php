<footer class="mt-auto border-t border-border">
  <div class="mx-auto w-full max-w-6xl px-6 py-8 text-sm text-muted">
    @php(dynamic_sidebar('sidebar-footer'))

    <p>Site by Will the Web Developer</p>
    <p>&copy; {{ date('Y') }} {!! $siteName !!}</p>
  </div>
</footer>
