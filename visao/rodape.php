    <footer class="footer">
        <div class="container">
            <span class="text-muted">Laboratório de Programação de Aplicaçoes WEB - Juan Ferreira Carlos.</span>
        </div>
    </footer>
    <?php if ($_SERVER['REQUEST_URI'] == '/GitHub/GitHub/PHP/LPAW/index.php' || $_SERVER['REQUEST_URI'] == '/LPAW/index.php' || 
        $_SERVER['REQUEST_URI'] == '/GitHub/GitHub/PHP/LPAW/' || $_SERVER['REQUEST_URI'] == '/LPAW/') {
            echo '<script>window.jQuery || document.write(\'<script src="./js/jquery.min.js"><\/script>\')</script>';
            echo '<script src="./js/bootstrap.min.js"></script>';
        } else {
            echo '<script>window.jQuery || document.write(\'<script src="../js/jquery.min.js"><\/script>\')</script>';
            echo '<script src="../js/bootstrap.min.js"></script>';
        }
    ?>
</body>
</html>