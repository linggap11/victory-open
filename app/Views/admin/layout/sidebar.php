<div class="page-sidebar custom-scrollbar" data-intro="This is sidebar">
    <ul class="sidebar-menu">
        <li>
            <div class="sidebar-title"><?= session()->get('user_id')  ?>'s Page</div>
            <a href="/admin/dashboard" class="sidebar-header">
                <i class="icon-notepad"></i> <span>Dashboard</span>
            </a> 
            <a href="/admin/poomsae" class="sidebar-header">
                <i class="icon-id-badge"></i> <span>Peserta Poomsae</span>
            </a> 
            <a href="/admin/kyourugi" class="sidebar-header">
                <i class="icon-id-badge"></i> <span>Peserta Kyourugi</span>
            </a> 
            <a href="/admin/club" class="sidebar-header">
                <i class="icon-flag"></i> <span>Club</span>
            </a> 
            <a href="/admin/invoice" class="sidebar-header">
                <i class="icon-wallet"></i> <span>Invoice</span>
            </a> 
        </li>     
    </ul>
    <div class="sidebar-widget text-center">
        <div class="sidebar-widget-top">
            <h6 class="mb-2 fs-14">Find us on :)</h6>
            <i class="fa fa-instagram"></i>
        </div>
        <div class="sidebar-widget-bottom p-20 m-20">
            <p><a href="http://instagram.com/victorytkdbdg" target="_blank">@victorytkdbdg</a>
                <br>victorytaekwondo.id
            </p>
        </div>
        
    </div>
    <footer>
        <p class="footer-heart">
        Made with <g-emoji class="g-emoji" alias="heart" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png">
        <img class="emoji" alt="heart" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png"></g-emoji> by <a href="#">Victory Taekwondo Club</a>
        </p>
    </footer>
</div>