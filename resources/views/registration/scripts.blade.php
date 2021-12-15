<script>
    window.addEventListener("DOMContentLoaded", () => {
        const btn_toggle_nav = document.querySelector(".toggle-avatar-nav");
        const avatar_nav = document.querySelector(".avatar-nav");
        const btn_toggle_sidenav = document.querySelector('.toggle-sidenav');
        const sidenav = document.querySelector('.sidenav');


        const toggleRightNav = () => {
            avatar_nav.classList.toggle("hidden")
        }

        const toggleSideNav = () => {
            sidenav.classList.toggle("-translate-x-full")
        }

        btn_toggle_nav.addEventListener("click", toggleRightNav);
        btn_toggle_sidenav.addEventListener("click", toggleSideNav);
    })
</script>
