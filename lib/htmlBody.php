    </div><!-- /.sp-wrapper -->

    <!-- JavaScript -->
    <script src="<?php echo asset('js/main.js'); ?>"></script>

    <!-- Page specific JS if exists -->
    <?php if (isset($pageJS) && !empty($pageJS)): ?>
    <script src="<?php echo asset($pageJS); ?>"></script>
    <?php endif; ?>

    <!-- Inline scripts -->
    <?php if (isset($inlineJS) && !empty($inlineJS)): ?>
    <script>
        <?php echo $inlineJS; ?>
    </script>
    <?php endif; ?>
</body>
</html>
