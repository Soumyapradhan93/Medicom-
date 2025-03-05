<script>
    function formvalidation() {
        var name = document.getElementById("name").value;
        var number = document.getElementById("number").value;
        var doctor = document.getElementById("service").value;

        if (name == '' || name == '') {
            alert("Please Enter your Name....");
            document.getElementById("name").focus;
            return false;
        } else if (number == '' || number == '') {
            alert("Please Enter your Age....");
            document.getElementById("number").focus;
            return false;
        } else if (doctor == '' || doctor == '') {
            alert("Please Select Doctor....");
            document.getElementById("service").focus;
            return false;
        }
    }
</script>

<script>
    function validation() {
        var a = document.getElementById("fname").value;
        var b = document.getElementById("lname").value;
        var c = document.getElementById("mail").value;
        var d = document.getElementById("pnumber").value;
        var e = document.getElementById("comment").value;
        if (a == '') {
            alert("please enter the first name").focus();
            return false;
        } else if (b == '') {
            alert("please enter your last name").focus();
            return false;
        } else if (c == '') {
            alert("please enter your email").focus();
            return false;
        } else if (d == '') {
            alert("please enter your phone number").focus();
            return false;
        } else if (e == '') {
            alert("please enter your message").focus();
            return false;
        }
    }
</script>

<script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 100,
        duration: 1450,
    });
</script>
</body>

</html>