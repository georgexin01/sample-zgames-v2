    </div><!-- /.zgames-wrapper -->

    <!-- JavaScript Libraries -->
    <script src="script/jquery.min.js"></script>
    <script src="script/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="<?php echo asset('js/main.js'); ?>"></script>

    <!-- Page-specific scripts -->
    <?php if (isset($pageScripts)): ?>
        <?php foreach ($pageScripts as $script): ?>
            <script src="<?php echo e($script); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Inline scripts -->
    <?php if (isset($inlineScript)): ?>
        <script>
            <?php echo $inlineScript; ?>
        </script>
    <?php endif; ?>

</body>
</html>
