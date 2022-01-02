<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <style type="text/css">
	table{
	boarder-collapse: collapse;
	width:100%;
	height: 25%;
	color: #eb4034;
	font-family: monospace;
	font-size:25px;
	text-align:center;

	}
	th{
	background-color: #eb4034;
	color:white;
	}
	tr:nth-child(even) {background-color: white}
	tr:nth-child(odd) {background-color: yellow}
	</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome to Luxury Apartments Delft, About Us, Our Location, Handpicked to deliver a great stay, To do’s in Delft, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Mi Amoro</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Dental-Clinic-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i">
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#150734">
    <meta property="og:title" content="Dental Clinic 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"> 
    <section class="u-clearfix u-image u-section-1" id="sec-0781">
      <div class="u-expanded-height u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
      <img src="images/bg3.png" alt="" class="u-image u-image-contain u-image-default u-image-1" data-image-width="490" data-image-height="339">
      <div class="u-container-style u-group u-group-1">
        <div class="u-container-layout u-valign-middle-md u-container-layout-1">
          <h1 class="u-text u-text-white u-title u-text-1">Mi Amoro&nbsp;</h1>
          <p class="u-text u-text-body-alt-color u-text-2">Math models and such chuchu</p>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_d74c">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-palette-2-base u-size-20 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-custom-font u-font-pt-sans u-text u-text-white u-text-1">About Us</h2>
                <div class="u-border-20 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-5-light-2 u-right-cell u-size-40 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle-sm u-container-layout-2">
                <p class="u-text u-text-palette-1-base u-text-2"> pagod na ako</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_0dac">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-right-cell u-size-40 u-image-1" data-image-width="259" data-image-height="194">
              <table>
		<tr>
			<th>ANOVA Results </th>
		</tr>
		
		<?php
		$conn = mysqli_connect('localhost','root','','python_db');
		$query = 'SELECT dataA FROM test_table';
		$result = $conn->query($query);
		if ($result ->num_rows>0){
			while($row =$result-> fetch_assoc()){
				echo "<tr><td>" . $row["dataA"] . "</td></tr>";
			}
		}
		else{ 
			echo "No Results";
		}
		$conn->close();
		?>
		
		</table>
		<div class="u-container-layout"></div>
            </div>
            <div class="u-container-style u-layout-cell u-left-cell u-palette-1-base u-size-20 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <img src="images/bg2.png" alt="" class="u-image u-image-contain u-image-default u-image-2" data-image-width="643" data-image-height="501">
                <h2 class="u-custom-font u-font-pt-sans u-text u-text-1">Insert Graph here</h2>
                <p class="u-text u-text-2"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="u-border-20 u-border-white u-line u-line-horizontal u-line-1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-5-light-2 u-section-4" id="sec-b025">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-1">
            <h2 class="u-custom-font u-font-pt-sans u-text u-text-1">Mi Amoro Graphs</h2>
            <p class="u-text u-text-2"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-xl u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h3 class="u-text u-text-3">Place Holder 1</h3>
                  <p class="u-text u-text-4"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <a href="#" class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-1">read more</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-3">
                  <h3 class="u-text u-text-5">Place Holder 2</h3>
                  <p class="u-text u-text-6"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <a href="#" class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-2">read more</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-valign-middle u-container-layout-4">
                  <h3 class="u-text u-text-7">Place Holder 3</h3>
                  <p class="u-text u-text-8"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <a href="#" class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-3">read more</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                <div class="u-container-layout u-valign-middle u-container-layout-5">
                  <h3 class="u-text u-text-9">Place Holder 4</h3>
                  <p class="u-text u-text-10"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <a href="#" class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-4">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_f2e6">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-palette-1-base u-size-20 u-layout-cell-1">
              <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-container-layout-1">
                <img src="images/bg3.png" alt="" class="u-image u-image-contain u-image-default u-image-1" data-image-width="490" data-image-height="339">
                <h2 class="u-custom-font u-font-pt-sans u-text u-text-1">Mi Amoro Graphs</h2>
                <p class="u-text u-text-2"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-right-cell u-size-40 u-image-2" data-image-width="612" data-image-height="409">
              <div class="u-container-layout"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-6" id="sec-8f1d">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1" data-image-width="300" data-image-height="168">
              <div class="u-container-layout"></div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-size-20 u-image-2" data-image-width="300" data-image-height="168">
              <div class="u-container-layout"></div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-3" data-image-width="300" data-image-height="168">
              <div class="u-container-layout"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="carousel_5019">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" data-image-width="300" data-image-height="168">
              <div class="u-container-layout"></div>
            </div>
            <div class="u-container-style u-layout-cell u-palette-2-base u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-container-layout-2">
                <img src="images/bg3.png" alt="" class="u-image u-image-contain u-image-default u-image-2" data-image-width="490" data-image-height="339">
                <h2 class="u-custom-font u-font-pt-sans u-text u-text-1">Mi Amoro</h2>
                <p class="u-text u-text-2"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="u-border-20 u-border-white u-line u-line-horizontal u-line-1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-1-base u-section-8" id="sec-2fbf">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-18 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-custom-font u-font-pt-sans u-text u-text-1">Something</h3>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-42 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-text u-text-2"> Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>