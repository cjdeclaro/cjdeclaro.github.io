# EZ-Parallax
Parallax templates for easy inclusions to existing websites

## Preview
You can preview the site at [cjdeclaro.github.io](https://cjdeclaro.github.io/EZ-Parallax/)

## Implementation
#### Adding to your site
Add the following code to your parallax section:
```
<section>
	<div class="keyart" id="parallax">
		<div class="keyart_layer parallax" id="keyart-0" data-speed="2"></div>
		<div class="keyart_layer parallax" id="keyart-1" data-speed="5"></div>
		<div class="keyart_layer parallax" id="keyart-2" data-speed="11"></div>
		<div class="keyart_layer parallax" id="keyart-3" data-speed="16"></div>
		<div class="keyart_layer parallax" id="keyart-4" data-speed="26"></div>
		<div class="keyart_layer parallax" id="keyart-5" data-speed="36"></div>
		<div class="keyart_layer parallax" id="keyart-6" data-speed="49"></div>
		<div class="keyart_layer parallax" id="keyart-7" data-speed="69"></div>
		<div class="keyart_layer" id="keyart-8" data-speed="100"></div>
	</div>
</section>
```
The default setting has 8 parallax layers

#### Customizing the images
Go to **__/img__** folder and edit the images into **__.png__** format

#### Adding your main content
Put your site content inside:

```
<section class="main-content">
	<div style="/*Your own style*/">
		<!--Put your content here-->
	</div>
</section>
```

#### Adding more layers
Edit the **__parallax.css__** to add layers by adding:
```
#keyart-n {
	background-image: url(img/imgname.png);
}
```
and calling it in your **.html** file

#### Customizing layer speed
Change the `data-speed` value from the .html code o speed up or slow down movement speed

