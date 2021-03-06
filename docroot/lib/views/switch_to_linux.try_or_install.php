<?php
# This file is not a valid entry point; stop processing unless GGL is defined.
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
?>

<nav class="chapters">
  <?php $this->list_chapter_sections('switch_to_linux'); ?>
</nav>

<main>
  <div class="container">
    <article>
      <header>
        <h1><?php print _("Try or install"); ?></h1>
        <div class="page-intro">
          <p><?php print _("Make the step &ndash; unless you wish to <a href=\"#free_software_pre_installed\" title=\"GNU/Linux Desktops and Laptops\">purchase a PC with GNU/Linux pre-installed</a>, you can see what freedom looks like on your computer."); ?></p>
        </div>
      </header>

      <section>
        <h2 id="live_cd"><?php print _("Try out: the live CD"); ?></h2>

        <h3 id="live_cd_what_is"><?php print _("Take no risk"); ?></h3>
        <img src="/images/Disc.svg" class="float-right width20p hidden-xs" alt="">
        <p><?php print _("Using a live CD means that GNU/Linux will be running on your computer <em>without installing anything</em>. It's a risk-less way to try and see by yourself what GNU/Linux is."); ?></p>
        <p><?php print _("When running on a live CD, your computer uses solely the CD-ROM to work (without accessing the hard drive inside). You can launch all of the default programs, edit documents, and browse the web."); ?></p>
        <p><?php print _("Since it is only designed as a trial mode, it is a little slow (it will take you five minutes to boot up, and programs launch somewhat slowly). If you proceed to install, the system will go much faster."); ?></p>

        <h3 id="live_cd_what_need"><?php print _("What you need"); ?></h3>
        <p><?php print _("To use a live CD, you need a little bit of curiosity and fifteen minutes of free time, but <strong>no advanced knowledge in computing</strong>. If you feel confident simply using Windows from time to time, then this is within your reach."); ?></p>
      </section>

      <section>
        <h2 id="install_dual_boot"><?php print _("Installing as a dual boot"); ?></h2>

        <h3 id="dual_boot_what_is"><?php print _("Choose at start-up"); ?></h3>
        <p><?php print _("It is possible to install GNU/Linux along with Windows. This means that upon start-up, you will be greeted with a screen allowing you to boot into the operating system you prefer."); ?></p>
        <p><?php print _("Setting up a dual-boot can be helpful if you need time to abandon restrictive software. It is <a href=\"https://tutorials.ubuntu.com/tutorial/tutorial-install-ubuntu-desktop\" title=\"a tutorial on installing Ubuntu\" rel=\"external\">not difficult to set-up</a>, though erasing Windows altogether is even easier."); ?></p>

        <h3 id="dual_boot_what_need"><?php print _("What you need"); ?></h3>
        <p><?php print _("Installing GNU/Linux on your computer will take you less than 30 minutes. It is not an obvious step for complete beginners, but if you use computers on a daily basis this is very likely within your reach. If you have already re-installed Windows on your computer, rest assured that installing GNU/Linux is no harder."); ?></p>
      </section>

      <section>
        <h2 id="get_the_cd"><?php print _("Get the CD you need"); ?></h2>
        <p><?php print _("For the distributions we recommend, the live CD (or DVD) is the same as the installation CD. You can either download and burn a CD yourself, or order a CD from a trusted vendor."); ?></p>

        <div class="download-box">
          <div class="download-box-logo">
            <p><img src="/images/UbuntuIcon.svg" alt="Ubuntu"></p>
          </div>
          <div class="download-box-content">
            <p><?php print _("You can download an <code>iso</code> image (rather large file) and then <a href=\"https://tutorials.ubuntu.com/tutorial/tutorial-burn-a-dvd-on-windows\" rel=\"external\">burn it to a DVD</a> or <a href=\"https://tutorials.ubuntu.com/tutorial/tutorial-create-a-usb-stick-on-windows\" rel=\"external\">create a bootable USB stick</a>. You can then use it to <a href=\"https://tutorials.ubuntu.com/tutorial/tutorial-install-ubuntu-desktop\" rel=\"external\">install Ubuntu</a> onto your computer."); ?></p>

            <div class="download-box-buttons">
              <div class="button green">
                <a href="https://www.ubuntu.com/download/" target="_blank"><i class="fa fa-download fa-fw"></i> <?php print _("Download Ubuntu"); ?></a>
              </div>
              <div class="button blue">
                <a href="https://www.osdisc.com/products/linux/ubuntu?affiliate=ggl" target="_blank"><i class="fa fa-truck fa-fw"></i> <?php print _("Order a CD"); ?></a>
              </div>
            </div>
          </div>
        </div>

        <div class="download-box">
          <div class="download-box-logo">
            <p><img src="/images/FedoraIcon.png" alt="Fedora"></p>
          </div>
          <div class="download-box-content">
            <p><?php
            # translators: A list of available translations for the installation guide is displayed at that URL. Please use the URL for your language if it is available.
            print _("The Fedora live CD also enables installation. Follow the <a href=\"https://docs.fedoraproject.org/en-US/Fedora/html/Installation_Guide/index.html\" rel=\"external\">Fedora installation guide</a> to get started with Fedora."); ?></p>

            <div class="download-box-buttons">
              <div class="button green">
                <a href="https://getfedora.org/" target="_blank"><i class="fa fa-download fa-fw"></i> <?php print _("Download Fedora"); ?></a>
              </div>
              <div class="button blue">
                <a href="https://www.osdisc.com/products/linux/fedora?affiliate=ggl" target="_blank"><i class="fa fa-truck fa-fw"></i> <?php print _("Order a CD"); ?></a>
              </div>
            </div>
          </div>
        </div>

        <div class="download-box">
          <div class="download-box-logo">
            <p><img src="/images/TrisquelIcon.svg" alt="Trisquel"></p>
          </div>
          <div class="download-box-content">
            <p><?php print _("The <a href=\"https://trisquel.info/wiki/installation-guide\" rel=\"external\">Trisquel installation</a> is very similar to that of Ubuntu."); ?></p>

            <div class="download-box-buttons">
              <div class="button green">
                <a href="https://trisquel.info/download" target="_blank"><i class="fa fa-download fa-fw"></i> <?php print _("Download Trisquel"); ?></a>
              </div>
              <div class="button blue">
                <a href="https://www.osdisc.com/products/linux/trisquel?affiliate=ggl" target="_blank"><i class="fa fa-truck fa-fw"></i> <?php print _("Order a CD"); ?></a>
              </div>
            </div>
          </div>
        </div>

        <p class="note italic"><?php print _("Note: Purchased and downloaded CDs are identical! GNU/Linux is <a href=\"https://www.gnu.org/philosophy/free-sw.html\" title=\"What do you mean, free?\" rel=\"external\">free software</a>. You are simply paying a handling/shipping fee."); ?></p>
      </section>

      <section>
        <h2 id="free_software_pre_installed"><?php print _("Free Software pre-installed"); ?></h2>
        <img src="/images/Laptop.png" class="float-right width20p hidden-sm" alt="">
        <p><?php print _("Not all computers are shipped with Windows. If you do not wish to make the install yourself, or are in need of new hardware, you can get a laptop or a desktop pre-installed with GNU/Linux. <a href=\"https://linuxpreloaded.com/\" rel=\"external\">LinuxPreloaded.com</a> has compiled a list of vendors pre-installing GNU/Linux just for that reason."); ?></p>
      </section>
    </article>
  </div>
</main>

<?php $this->load_footer(); ?>
