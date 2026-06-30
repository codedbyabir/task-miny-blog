<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Task_Miny
 */

?>

	<!-- Footer -->
  <footer class="border-t bg-muted/30">
    <div class="mx-auto max-w-6xl px-4 py-10 sm:px-6">
      <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
        <div class="flex flex-col items-center gap-2 sm:items-start">
          <div class="flex items-center gap-2">
            <img
              src="https://taskminy.com/tm-logo.png"
              alt="TaskMiny"
              class="h-5 w-auto"
            />
          </div>

          <span class="text-xs text-muted-foreground">
            © 2026 TaskMiny. All rights reserved.
          </span>
        </div>

        <nav class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2">
          <a href="/#features" class="text-xs text-muted-foreground transition-colors hover:text-foreground">Features</a>
          <a href="/#pricing" class="text-xs text-muted-foreground transition-colors hover:text-foreground">Pricing</a>
          <a href="/#faq" class="text-xs text-muted-foreground transition-colors hover:text-foreground">FAQ</a>
          <a href="/blog" class="text-xs text-muted-foreground transition-colors hover:text-foreground">Blog</a>
          <a href="/privacy-policy" class="text-xs text-muted-foreground transition-colors hover:text-foreground">Privacy Policy</a>
          <a href="/terms-and-conditions" class="text-xs text-muted-foreground transition-colors hover:text-foreground">Terms</a>
          <a href="https://taskminy.kbixy.com/" target="_blank" rel="noopener noreferrer" class="text-xs text-muted-foreground transition-colors hover:text-foreground">Knowledgebase</a>
          <a href="https://www.facebook.com/taskminy" target="_blank" rel="noopener noreferrer" class="text-xs text-muted-foreground transition-colors hover:text-foreground">Facebook</a>
        </nav>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
