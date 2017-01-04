$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
function submitForm(action)
{
    document.getElementById('columnarForm').action = action;
    document.getElementById('columnarForm').submit();
}