/**
 * Created by eclark on 4/20/15.
 */
$("nav.nav-tool>ul>li").each(function() {

    var navItem = $(this);

    if (navItem.text().toLowerCase() == location.pathname.split('/').pop()) {

        navItem.addClass("active");
    }
});

$("nav.nav-main>ul>li").each(function() {

    var navItem1 = $(this);

    if(navItem1.find("a").attr("href").split('/').pop() == location.pathname.split('/').pop()){
        navItem1.addClass("active");
    }
});