<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tucker Nickman - Portfolio Website 2021</title>
    <?php include "header.php"; ?>
</head>
 
<body>
    <?php include "menu.php"; ?>

    <!--home page-->

    <?php include "mainsection1.php"; ?> 

    <?php include "mainsection2.php";?>

    <?php include "donate.php";?>

    <?php include "footer.php"; ?>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="/js/jquery.cointipper-pack.min.js"></script>

	<script>
		$(function() {
			$('#donate-bitcoin').coinTipper({
				type: 'donate',
				currency: 'bitcoin',
				iso: 'BTC',
				address: 'bc1qz5saf9zc4fne444phttjfcw8y0uk6kxuz93y53',
				label: 'CoinTipper Tip Jar'
			});

			$('#donate-ether').coinTipper({
				type: 'donate',
				currency: 'ether',
				iso: 'ETH',
				address: '0x427e88d8d0C50bD0C898864d68D993372642ac42',
				label: 'CoinTipper Tip Jar'
			});

			$('#donate-cardano').coinTipper({
				type: 'donate',
				currency: 'cardano',
				iso: 'ADA',
				address: 'addr1qyy90dfwrez8dlnxgzxhzxwm0gly3f27gh5axa7leg7qqtkpqlq22fng75p5g0p6v0ztu0997m6kmyakadnakg9x8zzqqdge0l',
				label: 'CoinTipper Tip Jar'
			});

            $('#donate-algorand').coinTipper({
				type: 'donate',
				currency: 'algorand',
				iso: 'ALGO',
				address: 'Q3EWZDYSRNRAXYYM6DG5MX5XUP3ESCKXL632ZX7GG6E3DF5RFGHFAP5TDY',
				label: 'CoinTipper Tip Jar'
			});
 
			$('#donate-dogecoin').coinTipper({
				type: 'donate',
				currency: 'dogecoin',
				iso: 'DOGE',
				address: 'D5Es4iv3bnu3UDhMEBXBy8gozaPuY9EVP3',
				label: 'CoinTipper Tip Jar'
			});

			$('#donate-polkadot').coinTipper({
				type: 'donate',
				currency: 'polkadot',
				iso: 'DOT',
				address: '16dYdvt3r6sVh2ZAwDEMbrMPYEexHuEYnTmSL7C47ZtJCKvm',
				label: 'CoinTipper Tip Jar'
			});

			$('#donate-dogecoin').coinTipper({
				type: 'donate',
				currency: 'tron',
				iso: 'TRX',
				address: 'TUCnkcRjVahaaE4Jo9axf7R2ijfsvYgm4H',
				label: 'CoinTipper Tip Jar'
			});

			$('#donate-polkadot').coinTipper({
				type: 'donate',
				currency: 'tezos',
				iso: 'XTZ',
				address: 'tz1goWz44hgWY1yt7isP1VYhqVkbkD4mof36',
				label: 'CoinTipper Tip Jar'
			});
		});
	</script>
</body>
</html>