<!----------Footer--------------->

<div class="footer fixed-bottom">
    <div class="container">
        <p class="copyright">Copyright
            2020 - ChikaCiau</p>
    </div>

</div>



<!-------------js for toggle menu-------------->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px"
        }
    }

</script>
@yield('js')
