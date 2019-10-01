<body>
<style type="text/css">
*
{
	padding: 0px;
	margin: 0px;
}
.logo
{
	background-image: url('/ksp-master/assets/gambar/logo2.png');
	background-size: cover;
	background-position: center;
	margin-top: -2px; 
}
.menu
{
	margin-top: -10px;
	height: 60px;
	width: 100%;
	box-shadow: rgb(0,0,0,0.2) 0px 2px 6px 0px;
	background-image: linear-gradient(125deg, #2c3e50,#27ae60,#58d0e6,#2aa7be,#374865);
  	background-size: 400%;
  	animation: bganimation 15s infinite;
}
@keyframes bganimation {
  0%{
    background-position: 0% 50%;
  }
  50%{
    background-position: 100% 50%;
  }
  100%{
    background-position: 0% 50%;
  }
}
.menu ul
{
	list-style: none;
}
.menu ul li
{
	float: left;
	width: 140px;
	height: 60px;
	text-align: center;
	line-height: 60px;
	
}
.menu ul li a
{
	color: #fff;
	display: block;
	text-decoration: none;
	font-size: 18px;
}
.menu ul li a:hover
{
	background: #fff;
	color: #0099cc;
	transition: 700ms ease;
}
.drop ul
{
	margin: 0px;
}
.drop ul li
{
	box-shadow: rgb(0,0,0,0.2) 0px 2px 6px 0px;
	background: #fff;
	display: none;
	position: relative;
}
.drop ul li a
{
	color: #0099cc;
}
.drop ul li a:hover
{
	background: #0099cc;
	color: #fff;
}
.menu ul li:hover ul li
{
	display: block;
}
.drop ul li:nth-child(1)
{
	animation: anm1 500ms ease;
}
.drop ul li:nth-child(2)
{
	animation: anm2 600ms ease;
}
.drop ul li:nth-child(3)
{
	animation: anm2 700ms ease;
}
.drop ul li:nth-child(4)
{
	animation: anm3 800ms ease;
}

@keyframes anm1
{
	0%{transform: scale(2,2) rotateX(90deg)}
	100%{transform: scale(1,1) rotate(0deg)}
}
@keyframes anm2
{
	0%{left: -150px}
	100%{left: 0px;}
}
@keyframes anm3
{
	0%{width: 80px}
	100%{width: 140px;}
}	
.icon
{
	background-image: url('/ksp-master/assets/gambar/userr.png');
	background-size: cover;
	background-position: center;
	width: 40px;
	height: 40px;
	margin-top: 10px;
	margin-left: 1000px;
	position: absolute;
}
.user_p
{
	margin-top: 20px;
	margin-left: 1050px;
	font-size: 15px;
	font-weight: normal;
	position: absolute;
}
#simbol
{
	font-size: 52px;
	font-weight: bold;
	margin-left: 1157px;
	margin-top: 15px; 
	color: white;
	position: absolute;
}
.ekeluar
{
	position: absolute;
	top: 30px;
	left: 1280px;
	transform: translate(-50%,-50%);
	width: 171px;
	height: 60px;
	text-align: center;
	line-height: 60px;
	color: #fff;
	text-transform: uppercase;
	text-decoration: none;
	font-family: sans-serif;
	box-sizing: border-box;
	/*background: linear-gradient(90deg, #0e6073, #067773, #03a9f4, #0e6073);
	background-size: 100%;*/
	z-index: 1;
	font-family: Felix Titling;

}
.ekeluar:hover
{
	animation: animate 8s linear  infinite;
}
@keyframes animate
{
	0%
	{
		background-position: 0%;
	}
	100%
	{
		background-position: 400%;
	}
}
.ekeluar:before
{
	content:'';
	position: absolute;
	top: -5px;
	left: -5%;
	right: -5%;
	bottom: -5%;
	z-index: -1;
	background: linear-gradient(90deg, #0e6073, #067773, #03a9f4, #0e6073);
	background-size: 400%;
	/*border-radius: 40px;*/
	filter: blur(20px);
	opacity: 0;
	transition: 0.5s;
}
.ekeluar:hover:before
{
	filter: blur(20px);
	opacity: 1;
	animation: animate 8s linear  infinite;
}
</style>
<div class="menu">
	<ul>
		<li class="logo">
      	</li>
		<li class="drop" <?php if('nasabah'==$this->uri->segment(2)) echo 'class="active"';?>>
			<a href="<?php echo site_url('main/nasabah')?>" class="menuToggle">Nasabah</a>
			<ul>
				<li class="<?php if ($this->uri->segment(3)=='') echo 'active';?>>"><a href="<?php echo site_url('main/'.'nasabah')?>" >Data</a></li>
				<li class="<?php if ($this->uri->segment(3)=='add') echo 'active';?>>"><a href="<?php echo site_url('main/'.'nasabah/'.'add')?>" >Tambah</a></li>
			</ul>
		</li>
		<li class="drop" <?php if('simpanan'==$this->uri->segment(2)) echo 'class="active"';?>>
			<a href="<?php echo site_url('main/simpanan')?>" class="menuToggle">Simpanan</a>
				<ul>
					<li class="<?php if ($this->uri->segment(3)=='') echo 'active';?>>"><a href="<?php echo site_url('main/'.'simpanan')?>" >Data</a></li>
					<li class="<?php if ($this->uri->segment(3)=='ambil') echo 'active';?>>"><a href="<?php echo site_url('main/'.'simpanan/'.'ambil')?>" >Ambil</a></li>
					<li class="<?php if ($this->uri->segment(3)=='add') echo 'active';?>>"><a href="<?php echo site_url('main/'.'simpanan/'.'add')?>" >Tambah</a></li>
					<li class="<?php if ($this->uri->segment(3)=='laporan') echo 'active';?>>"><a href="<?php echo site_url('main/'.'simpanan/'.'laporan')?>" >Laporan</a></li>
				</ul>
		</li>
		<li class="drop" <?php if('pinjaman'==$this->uri->segment(2)) echo 'class="active"';?>>
			<a href="<?php echo site_url('main/pinjaman')?>" class="menuToggle">Pinjaman</a>
				<ul>
					<li class="<?php if ($this->uri->segment(3)=='') echo 'active';?>>"><a href="<?php echo site_url('main/'.'pinjaman')?>" >Data</a></li>
					<li class="<?php if ($this->uri->segment(3)=='bayar') echo 'active';?>>"><a href="<?php echo site_url('main/'.'pinjaman/'.'bayar')?>" >Bayar</a></li>
					<li class="<?php if ($this->uri->segment(3)=='add') echo 'active';?>>"><a href="<?php echo site_url('main/'.'pinjaman/'.'add')?>" >Tambah</a></li>
					<li class="<?php if ($this->uri->segment(3)=='laporan') echo 'active';?>>"><a href="<?php echo site_url('main/'.'pinjaman/'.'laporan')?>" >Laporan</a></li>
				</ul>
		</li>
		<li <?php if('keanggotaan'==$this->uri->segment(2)) echo 'class="active"';?>>
							<a href="<?php echo site_url('main/keanggotaan')?>" class="menuToggle">Keanggotaan</a>
		</li>
		<!-- <li <?php if('payroll'==$this->uri->segment(2)) echo 'class="active"';?>><a href="<?php echo site_url('main/payroll')?>" class="menuToggle">Adjust Payroll</a>
		</li> -->
		<?php if($this->session->userdata('level')=="admin"){?>
		<li class="drop" <?php if('user'==$this->uri->segment(2)) echo 'class="active"';?>><a href="<?php echo site_url('main/user')?>"><span>Admin</span></a>
			<ul>
				<li class="<?php if ($this->uri->segment(3)=='') echo 'active';?>>"><a href="<?php echo site_url('main/user')?>">Data</a></li>
				<li><?php echo anchor('main/form_user','Tambah Admin')?></li>
			</ul>
		</li>
		<?php } ?>
		<!-- <li>
			<a href="#" class="menuToggle">Pengaturan</a>
			<ul class="menu hide">
				<li class=""><a href="<?php echo site_url('main/kelas')?>"><span>Kelas</span></a></li>
				<li class=""><a href="<?php echo site_url('main/akunting')?>"><span>Akunting</span></a></li>
				<li class=""><a href="<?php echo site_url('main/kop')?>"><span>Kop Profil</span></a></li>
				<?php if($this->session->userdata('level')=="admin"){?><li class=""><a href="<?php echo site_url('main/user')?>"><span>Admin</span></a></li>
								<?php } ?>
			</ul>
		</li> -->
		<!-- <li class="hidden-phone">
			<a href="#themer" data-toggle="collapse"><span>Tema</span></a>
			<div id="themer" class="collapse">
				<div class="wrapper">
					<span class="close2">&times; close</span>
					<h4>Themer <span>color</span></h4>
					<ul>
						<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
						<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
						<li>
							<span class="link" id="themer-custom-reset">reset theme</span>
							<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
						</li>
					</ul>
					<div id="themer-getcode" class="hide">
						<div class="separator"></div>
						<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
						<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</li> -->
					
					
		<div class="profile">
				<div class="icon"></div>
				<div class="user_p"><?php echo $this->session->userdata('nama')?></div>
				<div id="simbol"> | </div>
				<a class="ekeluar" href="<?php echo site_url('main/logout')?>" style="text-decoration: none; color: white;">Keluar</a></div>
			<!-- <a class="img" href="form_demo.html"><img src="http://www.placehold.it/74x74/232323&text=photo" alt="Mr. Awesome" /></a> -->
		</div>
	</ul>
</div>
