<?php 

$products = array(
	[
		"link" => "#",
		"imagePro" => "image/mac.jpg",
		"namePro" => "Macbook Pro",

		"proInfo" => 'Macbook Pro 13 Touch Bar i5 1.4GHz/8G/128GB (2019)',
		"linkInfo" => "#",

		"currPrice" => "₫9,990,000",
		"oldPrice" => "đ19,990,000",
		"disPrice" => "30%",
		"icon" => "image/free.png",

		"star" => "image/star.png",
		"votes" => 9,
		"origin" => "Ha Noi"
	],
	[
		"link" => "#",
		"imagePro" => "image/mac.jpg",
		"namePro" => "Macbook Pro",

		"proInfo" => 'Macbook Pro 13 Touch Bar i5 1.4GHz/8G/128GB (2019)',
		"linkInfo" => "#",

		"currPrice" => "₫9,990,000",
		"oldPrice" => "đ19,990,000",
		"disPrice" => "30%",
		"icon" => "image/free.png",

		"star" => "image/star.png",
		"votes" => 9,
		"origin" => "Ha Noi"
	],
	[
		"link" => "#",
		"imagePro" => "image/mac.jpg",
		"namePro" => "Macbook Pro",

		"proInfo" => 'Macbook Pro 13 Touch Bar i5 1.4GHz/8G/128GB (2019)',
		"linkInfo" => "#",

		"currPrice" => "₫9,990,000",
		"oldPrice" => "đ19,990,000",
		"disPrice" => "30%",
		"icon" => "image/free.png",

		"star" => "image/star.png",
		"votes" => 9,
		"origin" => "Ha Noi"
	]
);

function picture($link, $img, $alt){
	$html ='<a href="'.$link.'">
		<img class="card-img-top" src="'.$img.'" alt="'.$alt.'" /> 
	</a> 
	';
	return $html;
}

function productInfo($linkInfo, $proInfo){
	$html ='<div class="info">
		<a href="'.$linkInfo.'"> '.$proInfo.' </a> 
	</div>';
  	return $html;
}

function price($currPrice, $oldPrice, $disPrice, $icon){
	$html ='
		<div class="price"><span>'.$currPrice.'</span></div>
		<div class="price"> 
			<span><del>'.$oldPrice.'</del></span>
			<span>'.$disPrice.'</span>
			<i class="images"><img src="'.$icon.'" /></i>
		</div>
    ';
  	return $html;
}

function vote($star, $vote, $origin){
	$html ='
		<div class="vote"> 
			<i class="star"><img src="'.$star.'" /></i>
			<i class="star"><img src="'.$star.'" /></i>
			<i class="star"><img src="'.$star.'" /></i>
			<i class="star"><img src="'.$star.'" /></i>
			<i class="star"><img src="'.$star.'" /></i>
			<span class="star">('.$vote.')</span>
		</div>
		<span class="origin">'.$origin.'</span>
    ';
  	return $html;
}

function product($link, $info, $curr, $old, $disc, $icons, $stars, $votes, $origins){
	$html ='<div class="card-body">
		'.productInfo($linkInfo=$link, $proInfo=$info).'
		'.price($currPrice=$curr, $oldPrice=$old, $disPrice=$disc, $icon=$icons).'
		'.vote($star=$stars, $vote=$votes, $origin=$origins).'
	</div>';
  	return $html;
}

// $html='<div class="card-deck">';
// foreach($products as $key => $product){
// 	$html .= '
// 	<div class="card">
// 		'.picture($product['link'], $product['imagePro'], $product['namePro']).'
				
// 		<div class="card-body">
// 			'.product($product['linkInfo'], $product['proInfo'], $product['currPrice'], $product['oldPrice'], $product['disPrice'], $product['icon'], $product['star'], $product['votes'], $product['origin']).'
// 		</div>
// 	</div>';
// }
// $html .= '</div>';

function App($products){
	$html='<div class="card-deck">';
	foreach ($products as $key => $product) {
		$html .= '<div class="card">
			'.picture($product['link'], $product['imagePro'], $product['namePro']).'
			
			'.product($product['linkInfo'], $product['proInfo'], $product['currPrice'], $product['oldPrice'], $product['disPrice'], $product['icon'], $product['star'], $product['votes'], $product['origin']).'
		</div>';
	}
	$html .='</div>';
	return $html;
}

// echo $html;
echo App($products);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"> 
</head>
<body>
<style type="text/css">
	.card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        /* float: center; */
        text-align: left;
        font-family: arial;
    }
    .images{
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        margin: 0 auto;
    }
    .info{
        overflow: hidden;
        height: 40px;
        line-height: 50px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
    }
    .price{
        height: 20px;
        line-height: 20px;
    }
    .price1{
        margin-right: 10px;
        vertical-align: middle;
    }
    .column{
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
        max-height: 100%;
        padding: 1px 10px;
    }
    .vote{
        float: left;
        color: #9e9e9e;
        margin-top: 10px;
    }
    .star{
		display: inline-block;
	    height: 30px;
	    width: 30px;
	    overflow: hidden;
	    background-repeat: no-repeat;
	    background-size: contain;
    }
    .origin{
        float: right;
        color: #9e9e9e;
        margin-top: 15px;
    }

</style>

</body>
</html>
