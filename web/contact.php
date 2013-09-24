<?php
  include 'common/page.php';
  $page = new Page();
  $page->setPathToWebRoot('');
  $page->setPageTitle('Mantevo - Contact');
  $page->setNavIdentifier('home');
 
  $y = <<< END
    th { text-align: left; padding-right: 1em; vertical-align: top; 
      padding-bottom: 1em; }
    td { vertical-align: top; padding-bottom: 1em; }
END;
  $page->setInlineStyles($y);
  
?>

<?php include 'common/header.html' ?>

<div class="breadcrumb"><a href="default.php">Home</a> - Contact</div>

<table cellspacing="0" cellpadding="0">

<tr><th>Primary Contacts:</th>
<td><a href="http://www.cs.sandia.gov/~maherou">Michael Heroux,</a></td>
<td><a href="http://www.sandia.gov/~rfbarre">Richard Barrett</a></td></tr>

</table>

<?php include 'common/footer.html' ?>