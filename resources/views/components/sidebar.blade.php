<aside class='navigation-sidebar'>
    <div class="navigation-sidebar-header">
        <ul>
            <li>
                <h1>Navigation</h1>
            </li>
            <li>
                <i class="fas fa-times fa-2x" onclick="closeNav()"></i>
            </li>
        </ul>
    </div>
    <div class="navigation-sidebar-body">
        <ul class='navigation-items'>
            <li class='navigation-item'><a href="/landing">Home</a></li>
            <li class='navigation-item'><a href="/about">About Cus</a></li>
            <li class='navigation-item'><a href="https://play.google.com/store/apps/details?id=user.com.cus&hl=in">Download App</a></li>
            <li class='navigation-item'><a href="/terms-and-conditions">Terms & Conditions</a></li>
            <li class='navigation-item'><a href="/contact">Contact Us</a></li>
        </ul>
    </div>
</aside>

<script>
function openNav() {
    document.querySelector(".navigation-sidebar").style.right = "0%";
}

function closeNav() {
    document.querySelector(".navigation-sidebar").style.right = "-100%";
}

const hrefsSidebar = document.querySelectorAll(".navigation-sidebar-body .navigation-items .navigation-item a");
const urlStringSidebar = window.location.href;

hrefsSidebar.forEach(link => {
    var hrefLink = link.getAttribute('href');
    var firstLocation = urlStringSidebar.indexOf(hrefLink);
    var headerLink = urlStringSidebar.substr(firstLocation, link.length);

    if (hrefLink === headerLink){
        document.querySelector(".navigation-sidebar-body .navigation-items .navigation-item a[href='"+hrefLink+"']").classList.add('active-nav');
    }
})
</script>