<script type="text/javascript" src="../assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };


        $('.delete_info').click(function() {
            let a = confirm("Are you sure to delete?");
            return a;
        });
    </script>
    
</body>

</html>