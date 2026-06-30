<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Task_Miny
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'task-miny' ); ?></a>

	<header
    id="siteHeader"
    class="fixed inset-x-0 top-0 z-50 bg-transparent transition-all duration-300"
  >
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 sm:px-6">
      <!-- Logo -->
      <button type="button" aria-label="TaskMiny Home">
        <img
          src="https://taskminy.com/tm-logo.png"
          alt="TaskMiny"
          class="h-7 w-auto"
        />
      </button>

      <!-- Desktop Navigation -->
      <nav class="hidden items-center gap-1 md:flex">
        <a
          href="/#features"
          class="rounded-md px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
        >
          Features
        </a>

        <a
          href="/#pricing"
          class="rounded-md px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
        >
          Pricing
        </a>

        <a
          href="/#faq"
          class="rounded-md px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
        >
          FAQ
        </a>

        <a
          href="/blog"
          class="rounded-md px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground"
        >
          Blog
        </a>
      </nav>

      <!-- Desktop Buttons -->
      <div class="hidden items-center gap-2 md:flex">
        <button
          type="button"
          class="inline-flex h-8 shrink-0 items-center justify-center gap-1.5 whitespace-nowrap rounded-md px-3 text-sm font-medium outline-none transition-all hover:bg-accent hover:text-accent-foreground focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50"
        >
          Login
        </button>

        <button
          type="button"
          class="inline-flex h-8 shrink-0 items-center justify-center gap-1.5 whitespace-nowrap rounded-md bg-primary px-3 text-sm font-medium text-primary-foreground shadow-xs outline-none transition-all hover:bg-primary/90 focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50"
        >
          Get Started Free
        </button>
      </div>

      <!-- Mobile Menu Toggle -->
      <button
        id="mobileMenuButton"
        type="button"
        aria-label="Open menu"
        aria-expanded="false"
        class="inline-flex size-9 shrink-0 items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium outline-none transition-all hover:bg-accent hover:text-accent-foreground focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 md:hidden"
      >
        <!-- Menu Icon -->
        <svg
          id="menuIcon"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="h-5 w-5"
          aria-hidden="true"
        >
          <path d="M4 12h16"></path>
          <path d="M4 18h16"></path>
          <path d="M4 6h16"></path>
        </svg>

        <!-- Close Icon -->
        <svg
          id="closeIcon"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="hidden h-5 w-5"
          aria-hidden="true"
        >
          <path d="M18 6 6 18"></path>
          <path d="m6 6 12 12"></path>
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div
      id="mobileMenu"
      class="is-closed border-b bg-background/95 backdrop-blur-lg md:hidden"
    >
      <div class="space-y-1 px-4 py-3">
        <a
          href="/#features"
          class="mobile-link block rounded-md px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground"
        >
          Features
        </a>

        <a
          href="/#pricing"
          class="mobile-link block rounded-md px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground"
        >
          Pricing
        </a>

        <a
          href="/#faq"
          class="mobile-link block rounded-md px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground"
        >
          FAQ
        </a>

        <a
          href="/blog"
          class="mobile-link block rounded-md px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground"
        >
          Blog
        </a>

        <div class="flex gap-2 pt-2">
          <button
            type="button"
            class="flex-1 inline-flex h-8 items-center justify-center gap-1.5 whitespace-nowrap rounded-md border bg-background px-3 text-sm font-medium shadow-xs outline-none transition-all hover:bg-accent hover:text-accent-foreground focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50"
          >
            Login
          </button>

          <button
            type="button"
            class="flex-1 inline-flex h-8 items-center justify-center gap-1.5 whitespace-nowrap rounded-md bg-primary px-3 text-sm font-medium text-primary-foreground shadow-xs outline-none transition-all hover:bg-primary/90 focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50"
          >
            Get Started Free
          </button>
        </div>
      </div>
    </div>
  </header>