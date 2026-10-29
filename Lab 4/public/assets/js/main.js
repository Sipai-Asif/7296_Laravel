// Sidebar show/hide (works on desktop and mobile)
document.addEventListener('DOMContentLoaded', function () {
    var sidebar = document.getElementById('sidebar');
    var btn = document.getElementById('toggle');
    if (!sidebar || !btn) return;
    if (window.innerWidth <= 980) sidebar.classList.add('inactive');
    btn.addEventListener('click', function () { sidebar.classList.toggle('inactive'); });
});
