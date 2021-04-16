<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['administrator']='admin/login';
$route['berita']='blog';
$route['berita']='blog/index';
$route['berita/(:any)']='blog/detail/$1';

$route['politik'] = 'filter/politik';

$route['galeri']='galeri';
$route['galeri']='galeri/index';
$route['galeri/(:any)']='galeri/detail/$1';

$route['aswaja']='aswaja';
$route['aswaja']='aswaja/index';
$route['aswaja/(:any)']='aswaja/detail/$1';

$route['pesantren']='pesantren';
$route['pesantren']='pesantren/index';
$route['pesantren/(:any)']='pesantren/detail/$1';

$route['sejarah']='sejarah';
$route['sejarah']='sejarah/index';
$route['sejarah/(:any)']='sejarah/detail/$1';

$route['pengurus']='pengurus';
$route['pengurus']='pengurus/index';
$route['pengurus/(:any)']='pengurus/detail/$1';

$route['tokoh']='tokoh';
$route['tokoh']='tokoh/index';
$route['tokoh/(:any)']='tokoh/detail/$1';

$route['aswajanucenter']='aswajanucenter';
$route['aswajanucenter']='aswajanucenter/index';
$route['aswajanucenter/(:any)']='aswajanucenter/detail/$1';

$route['laziznu']='laziznu';
$route['laziznu']='laziznu/index';
$route['laziznu/(:any)']='laziznu/detail/$1';

$route['ldnu']='ldnu';
$route['ldnu']='ldnu/index';
$route['ldnu/(:any)']='ldnu/detail/$1';

$route['lknu']='lknu';
$route['lknu']='lknu/index';
$route['lknu/(:any)']='lknu/detail/$1';

$route['lakpesdam']='lakpesdam';
$route['lakpesdam']='lakpesdam/index';
$route['lakpesdam/(:any)']='lakpesdam/detail/$1';

$route['lbmnu']='lbmnu';
$route['lbmnu']='lbmnu/index';
$route['lbmnu/(:any)']='lbmnu/detail/$1';

$route['lesbumi']='lesbumi';
$route['lesbumi']='lesbumi/index';
$route['lesbumi/(:any)']='lesbumi/detail/$1';

$route['lfnu']='lfnu';
$route['lfnu']='lfnu/index';
$route['lfnu/(:any)']='lfnu/detail/$1';

$route['lkknu']='lkknu';
$route['lkknu']='lkknu/index';
$route['lkknu/(:any)']='lkknu/detail/$1';

$route['lpmaarifnu']='lpmaarifnuu';
$route['lpmaarifnu']='lpmaarifnu/index';
$route['lpmaarifnu/(:any)']='lpmaarifnu/detail/$1';

$route['lpbhnu']='lpbhnu';
$route['lpbhnu']='lpbhnu/index';
$route['lpbhnu/(:any)']='lpbhnu/detail/$1';

$route['lpbinu']='lpbinu';
$route['lpbinu']='lpbinu/index';
$route['lpbinu/(:any)']='lpbinu/detail/$1';

$route['lpnu']='lpnu';
$route['lpnu']='lpnu/index';
$route['lpnu/(:any)']='lpnu/detail/$1';

$route['lppnu']='lppnu';
$route['lppnu']='lppnu/index';
$route['lppnu/(:any)']='lppnu/detail/$1';

$route['lptnu']='lptnu';
$route['lptnu']='lptnu/index';
$route['lptnu/(:any)']='lptnu/detail/$1';

$route['ltmnu']='ltmnu';
$route['ltmnu']='ltmnu/index';
$route['ltmnu/(:any)']='ltmnu/detail/$1';

$route['ltnnu']='ltnnu';
$route['ltnnu']='ltnnu/index';
$route['ltnnu/(:any)']='ltnnu/detail/$1';

$route['lwpnu']='lwpnu';
$route['lwpnu']='lwpnu/index';
$route['lwpnu/(:any)']='lwpnu/detail/$1';

$route['rminu']='rminu';
$route['rminu']='rminu/index';
$route['rminu/(:any)']='rminu/detail/$1';


$route['pagarnusa']='pagarnusa';
$route['pagarnusa']='pagarnusa/index';
$route['pagarnusa/(:any)']='pagarnusa/detail/$1';

$route['muslimat']='muslimat';
$route['muslimat']='muslimat/index';
$route['muslimat/(:any)']='muslimat/detail/$1';

$route['fatayat']='fatayat';
$route['fatayat']='fatayat/index';
$route['fatayat/(:any)']='fatayat/detail/$1';


$route['ansor']='ansor';
$route['ansor']='ansor/index';
$route['ansor/(:any)']='ansor/detail/$1';


$route['ipnu']='ipnu';
$route['ipnu']='ipnu/index';
$route['ipnu/(:any)']='ipnu/detail/$1';

$route['ishari']='ishari';
$route['ishari']='ishari/index';
$route['ishari/(:any)']='ishari/detail/$1';

$route['redaksi']='redaksi';
$route['redaksi']='redaksi/index';
$route['redaksi/(:any)']='redaksi/detail/$1';

$route['rantingsepande']='rantingsepande';
$route['rantingsepande']='rantingsepande/index';
$route['rantingsepande/(:any)']='rantingsepande/detail/$1';

$route['rantingsumokali']='rantingsumokali';
$route['rantingsumokali']='rantingsumokali/index';
$route['rantingsumokali/(:any)']='rantingsumokali/detail/$1';

$route['rantingsepande']='rantingsepande';
$route['rantingsepande']='rantingsepande/index';
$route['rantingsepande/(:any)']='rantingsepande/detail/$1';

$route['rantingtenggulunan']='rantingtenggulunan';
$route['rantingtenggulunan']='rantingtenggulunan/index';
$route['rantingtenggulunan/(:any)']='rantingtenggulunan/detail/$1';

$route['rantingsugihwaras']='rantingsugihwaras';
$route['rantingsugihwaras']='rantingsugihwaras/index';
$route['rantingsugihwaras/(:any)']='rantingsugihwaras/detail/$1';

$route['rantingkedungkendo']='rantingkedungkendo';
$route['rantingkedungkendo']='rantingkedungkendo/index';
$route['rantingkedungkendo/(:any)']='rantingkedungkendo/detail/$1';

$route['rantinglarangan']='rantinglarangan';
$route['rantinglarangan']='rantinglarangan/index';
$route['rantinglarangan/(:any)']='rantinglarangan/detail/$1';

$route['rantingsidodadi']='rantingsidodadi';
$route['rantingsidodadi']='rantingsidodadi/index';
$route['rantingsidodadi/(:any)']='rantingsidodadi/detail/$1';

$route['rantingcandi']='rantingsepande';
$route['rantingcandi']='rantingcandi/index';
$route['rantingcandi/(:any)']='rantingcandi/detail/$1';

$route['rantingjambangan']='rantingjambangan';
$route['rantingjambangan']='rantingjambangan/index';
$route['rantingjambangan/(:any)']='rantingjambangan/detail/$1';

$route['rantinggelam']='rantinggelam';
$route['rantinggelam']='rantinggelam/index';
$route['rantinggelam/(:any)']='rantinggelam/detail/$1';

$route['rantingbligo']='rantingbligo';
$route['rantingbligo']='rantingbligo/index';
$route['rantingbligo/(:any)']='rantingbligo/detail/$1';

$route['rantingkarangtanjung']='rantingkarangtanjung';
$route['rantingkarangtanjung']='rantingkarangtanjung/index';
$route['rantingkarangtanjung/(:any)']='rantingkarangtanjung/detail/$1';

$route['rantingsumorame']='rantingsumorame';
$route['rantingsumorame']='rantingsumorame/index';
$route['rantingsumorame/(:any)']='rantingsumorame/detail/$1';

$route['rantingbalongdowo']='rantingbalongdowo';
$route['rantingbalongdowo']='rantingbalongdowo/index';
$route['rantingbalongdowo/(:any)']='rantingbalongdowo/detail/$1';

$route['rantingbalonggabus']='rantingbalonggabus';
$route['rantingbalonggabus']='rantingbalonggabus/index';
$route['rantingbalonggabus/(:any)']='rantingbalonggabus/detail/$1';

$route['rantingwedoroklurak']='rantingwedoroklurak';
$route['rantingwedoroklurak']='rantingwedoroklurak/index';
$route['rantingwedoroklurak/(:any)']='rantingwedoroklurak/detail/$1';

$route['rantingklurak']='rantingklurak';
$route['rantingklurak']='rantingklurak/index';
$route['rantingklurak/(:any)']='rantingklurak/detail/$1';

$route['rantingkebonsari']='rantingkebonsari';
$route['rantingkebonsari']='rantingkebonsari/index';
$route['rantingkebonsari/(:any)']='rantingkebonsari/detail/$1';

$route['rantingdurungbedug']='rantingdurungbedug';
$route['rantingdurungbedug']='rantingdurungbedug/index';
$route['rantingdurungbedug/(:any)']='rantingdurungbedug/detail/$1';

$route['rantingdurungbanjar']='rantingdurungbanjar';
$route['rantingdurungbanjar']='rantingdurungbanjar/index';
$route['rantingdurungbanjar/(:any)']='rantingdurungbanjar/detail/$1';

$route['rantingngampelsari']='rantingngampelsari';
$route['rantingngampelsari']='rantingngampelsari/index';
$route['rantingngampelsari/(:any)']='rantingngampelsari/detail/$1';

$route['rantingkalipecabean']='rantingkalipecabean';
$route['rantingkalipecabean']='rantingkalipecabean/index';
$route['rantingkalipecabean/(:any)']='rantingkalipecabean/detail/$1';

$route['rantingkendalpecabean']='rantingkendalpecabean';
$route['rantingkendalpecabean']='rantingkendalpecabean/index';
$route['rantingkendalpecabean/(:any)']='rantingkendalpecabean/detail/$1';

$route['rantingkedungpeluk']='rantingkedungpeluk';
$route['rantingkedungpeluk']='rantingkedungpeluk/index';
$route['rantingkedungpeluk/(:any)']='rantingkedungpeluk/detail/$1';

$route['kanal/(:any)']='kanal/detail/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
