<!-- 	CONTENT -->
<div class="content2">
<div class="content2-pagetitle"><img src="tpl/stdstyle/images/blue/stat1.png" class="icon32" alt="{title_text}" title="{title_text}" />&nbsp;{{statistics _users}}: {username} </div>

<div class="nav4">
<?


					// statlisting
					$clidx = mnu_MainMenuIndexFromPageId($menu, "statlisting");
					if( $menu[$clidx]['title'] != '' )
					{
						echo '<ul id="statmenu">';
						$menu[$clidx]['visible'] = false;
						echo '<li class="title" ';
						echo '>'.$menu[$clidx]["title"].'</li>';
						mnu_EchoSubMenu($menu[$clidx]['submenu'], $tplname, 1, false);
						echo '</ul>';
					}
					//end statlisting
?>
				</div>
<table border="0" cellspacing="2" cellpadding="1" style="margin-left: 10px;" width="97%">
{content}
</table>
</div>

