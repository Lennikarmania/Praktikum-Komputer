document.addEventListener('DOMContentLoaded', function() {
    const sidebarLinks = document.querySelectorAll('.sidebar .menu ul li a');

    // Menangani link sidebar aktif saat diklik
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            sidebarLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Menangani link sidebar aktif saat halaman dimuat ulang
    const currentPath = window.location.pathname;
    const currentFileName = currentPath.substring(currentPath.lastIndexOf('/') + 1);

    sidebarLinks.forEach(link => {
        const linkHref = link.getAttribute('href');
        const linkFileName = linkHref.substring(linkHref.lastIndexOf('/') + 1);

        if (linkFileName === currentFileName) {
            link.classList.add('active');
        } else if (currentFileName === '' && linkFileName === 'index.php') {
            link.classList.add('active');
        }
    });
});