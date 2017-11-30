<div class="navbar navbar-fixed-top">
	<div class="container">
		<div class="navbar-inner">
			<ul class="nav">
				<li ><img src="./img/logo.png"></li>
				<li ><a href="./"><i class="icon-home"></i><b>主页</b></a></li>
				<li><a href="./?page=stats"><b>状态</b></a></li>
				<li><a href="./?page=search"><b>搜索</b></a></li>
				<li><a href="./?page=api"><b>API</b></a></li>
				<li><a href="<?php echo $curr_offweb; ?>" target="_blank"><b><?php echo $curr_name; ?>官网</b></a></li>	
				<li><a href="<?php echo $curr_exweb; ?>" target="_blank"><b>交易:<?php echo $curr_exname; ?></b></a></li>
			</ul>
			<form class="navbar-search pull-right" method="get" action="./index.php">
				<input type="hidden" name="page" value="search" />
				<input type="text" class="search-query" name="q" maxlength="99" placeholder="查询区块高度,交易编号或钱包地址">
			</form>
			
		</div>
	</div>
</div>
</div>
