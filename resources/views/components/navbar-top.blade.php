<nav class='navigation navigation-landing' id='navbar'>
    <ul>
        <li class='navigation-brand'>
            <a href="/landing"><div class="navigation-logo"></div></a>
        </li>
        <ul class='navigation-items'>
            <li class='navigation-item'><a href="/landing">Home</a></li>
            <li class='navigation-item'><a href="/about">About Cus</a></li>
            <li class='navigation-item'><a href="https://play.google.com/store/apps/details?id=user.com.cus&hl=in">Download App</a></li>
            <li class='navigation-item'><a href="/products">Product & Services</a></li>
            <li class='navigation-item'><a href="/contact">Contact Us</a></li>
        </ul>
        <li class='navigation-burger'>
            <button class="hamburger" type="button" onclick="openNav()">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </li>
    </ul>
</nav>

<section class='test'>

</section>

<script>
    const hrefs = document.querySelectorAll(".navigation .navigation-item a");
    const urlString = window.location.href;
    
    hrefs.forEach(link => {
        var hrefLink = link.getAttribute('href');
        var firstLocation = urlString.indexOf(hrefLink);
        var headerLink = urlString.substr(firstLocation, link.length);

        if (hrefLink === headerLink){
            document.querySelector(".navigation .navigation-item a[href='"+hrefLink+"']").classList.add('active-nav');
        }
    })
</script>