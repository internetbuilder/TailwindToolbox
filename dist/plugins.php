<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Toolbox - Free Starter Templates</title>
	<meta name="description" content="Free open source Tailwind CSS starter templates to quickly start your next project">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<?php include 'includes/head.php';?>
	<?php include 'includes/analytics.php';?>
		
</head>
<body class="bg-brand-white leading-normal tracking-normal nunito">

	<?php include 'includes/nav.php';?>

	<!--header-->
	<div class="z-20 mt-24 pb-6 mb-6 flex items-center text-center" style="background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">	
		<div class="flex flex-col w-full justify-center items-center pt-6 md:pt-16">
			<div class="px-3">
				<h1 class="pt-6">
					<span class="bg-brand font-bold text-center text-white text-3xl sm:text-4xl px-3 mb-5 sm:mb-16" style="box-decoration-break: clone;-webkit-box-decoration-break: clone;"><span>Tailwind Plugins</span></span>
				</h1>
				<p class="max-w-3xl mx-auto leading-normal my-6 font-bold text-base lg:text-xl text-left lg:text-center">Some useful plugins for extending Tailwind CSS.  Find out more about writing your own plugin <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://tailwindcss.com/docs/plugins" target="_blank" rel="noopener">here</a></p>
			</div>
		</div>
	</div>

	<div class="container mx-auto mb-8 flex inline-block flex-wrap">
		<div class="w-full pb-6 md:w-1/5">
			<div class="sticky pin-t flex flex-col" style="top:9em;">
				<!--Filters-->
				<div class="w-full bg-brand-white pl-3 pt-6 md: pl-0 md:pt-0 order-2 md:order-1">
					<p class="text-brand text-center font-bold mb-2">Filters</p>
					<ul class="container scroll mx-auto list-reset flex flex-row md:flex-col border-b md:pb-4 text-sm md:text-base">
						<li class="mr-1">
							<button class="tab -mb-px active-tab" onclick="javascript:filterTemplates('');" data-twfilter="all">All</button>
						</li>
						<?php 
							$filters = array('Utilities', 'Variants');
							foreach($filters as $filter) {
								echo "\t\t\t\t\t\t<li class=\"mr-1\">\n";
								echo "\t\t\t\t\t\t\t<button class=\"tab -mb-px\" onclick=\"javascript:filterTemplates('" . $filter . "');\" data-twfilter=\"" . $filter . "\">" . $filter . "</button>\n";
								echo "\t\t\t\t\t\t</li>\n";
							}
						?>

						<?php 
							$filters = array('benface', 'hacknug');
							foreach($filters as $filter) {
								echo "\t\t\t\t\t\t<li class=\"mr-1\">\n";
								echo "\t\t\t\t\t\t\t<button class=\"tab -mb-px\" onclick=\"javascript:filterTemplates('" . $filter . "');\" data-twfilter=\"" . $filter . "\"><svg class=\"inline h-3 pr-2 fill-current text-teal\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><path d=\"M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z\"></path></svg>" . $filter . "</button>\n";
								echo "\t\t\t\t\t\t</li>\n";
							}
						?>	
					</ul>
				</div>
				<!--/filters-->
				<div class="order-1 md:order-2">
					<p class="text-brand text-center font-bold mb-2 md:pt-3">Advertisment</p>
					<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
				</div>
			</div>
		
		</div>

		<div class="w-full md:w-4/5 px-0">
			<?php 
				$show_section = "Plugin";
				$show_home = false;
				include 'includes/render-data.php';
			?>

			<p class="my-8 p-6 w-full container mx-auto text-center text-gray-dark">If you have any useful plugins which will make your Tailwind CSS experience better, please drop us a tweet: <a class="font-extrabold text-teal-dark hover:text-teal-darkest" href="https://www.twitter.com/tailwindtoolbox" target="_blank" rel="noopener">@TailwindToolbox</a></p>	

		</div>

	</div>

	<?php include 'includes/footer.php';?>

	<?php include 'includes/js.php';?>


</body>
</html>