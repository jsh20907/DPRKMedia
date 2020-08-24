# DPRKMEDIA.com Source code

This source code is gained by hacking dprkmedia.com as known as KPM (조선언론정보기지)
It is quite astonishing that their source code is written with the .NET Framework, a framework developed by Microsoft. 
They say the United States is one of the most vicious countries, but they built a website praising the Kim family with a software framework made by the US. LOL. 

You can find many fun comments over the entire source code.

## Server Registry

[Server's Registry](https://github.com/hansolgeun/KPMServerRegistry)

### Fun Comments

#### Source
```PHP
class MY_Controller extends CI_Controller {
	
	...
	// url을 호출할때 먼저 이 메쏘드가 호출된다.
	public function _remap($method, $params = array())
	{
		if (method_exists($this, $method)) //url에서 추출한 메쏘드가 정확하면
		{
			...
			$this->$method($params); //파라메터와 함께 메쏘드를 추출한다.
		}
		...
	}
	public function render($view, $data = array(), $layout = self::LAYOUT_DEFAULT)
	{
		...
    echo boldSpecStr($display); //존함처리
	}
	...
	//현재 리용안함
	public function validate_form($form_elements_names, $validation_rules, $prefix = '')
	{
    ...
	}
	// 불멸의 령도 등록부경로 얻는다.
	public function GetLeadersTemp() {
		$path = self::PATH_DEFAULT."leaders/temp";
		...
	}
	// 우리의 프로그람 등록부경록얻는다.
	public function GetProgramDir() {
		$dir = self::PATH_DEFAULT."program";
		...
	}
}
```
#### Admin's Information
**Do not connect to this motherfuckers**

| LoginUserID     | LoginUserName | LoginPassword | Sosok     | Jigchek | Email                    | Description | RegisterDateTime        |
| --------------- | ------------- | ------------- | --------- | ------- | ------------------------ | ----------- | ----------------------- |
| 0463336710      | 정인석           | 1945218       | 경영국 사업부   | 부국장     | koukoku@korea-np.co.jp   | NULL        | 2004-06-03 11:23:16.120 |
| 09072223871     | 라기철           | 0915ra        | 편집국       | 부부장     | tyori@korea-np.co.jp     | NULL        | 2003-10-31 16:10:35.440 |
| 19690106        | 리송학           | 1969ama       | 편집국       | 부부장     | songhak@korea-np.co.jp   | NULL        | 2003-11-11 16:38:57.300 |
| 56075009        | 리용순           | 1974125       | 경영국 사업부   | 지도원     | koukoku@korea-np.co.jp   | NULL        | 2004-06-03 11:26:14.700 |
| 5g-in           | 오광인           | chongryon     | 편집국       | 부국장     |                          | NULL        | 2003-09-10 11:31:55.000 |
| 72223871        | 라 기철          | 0915ra        | 동포생활부     | 부부장     | tyori@korea-np.co.jp     | NULL        | 2003-10-07 15:32:38.907 |
| 림왕호             | 림왕호           | 1960          | 편집국       | 부국장     |                          | NULL        | 2004-04-01 14:23:18.293 |
| alicegoma       | 최량선           | che-ryangs    | 편집국       | 기자      | crs@korea-np.co.jp       | NULL        | 2003-09-16 14:59:43.730 |
| an-eryo         | 안애려           | bob4526       | 편집국 동포생활부 | 기자      | an-eryo@korea-np.co.jp   | NULL        | 2005-04-19 15:53:35.640 |
| CHON39          | 정상구           | CHON391110    | 편집국       | 기자      | sgchon@korea-np.co.jp    | NULL        | 2003-09-12 11:21:02.123 |
| cki2004         | 최관익           | goodfather    | 편집국       | 국장      | cki@korea-np.co.jp       | NULL        | 2003-09-16 12:27:07.403 |
| ckwiyu1103      | 천귀유           | 08221023      | 조선신보사 편집국 | 부부장     | kwiyu@korea-np.co.jp     | NULL        | 2003-09-08 16:35:53.483 |
| gichol          | 금기철           | 1999123       | 편집국       | 부장      | gichol@korea-np.co.jp    | NULL        | 2003-09-16 12:45:47.543 |
| guest7811       | 리행영           | hengyong      | 편집국       | 기자      |                          | NULL        | 2004-04-01 09:13:59.027 |
| gyli            | 리광영           | sikahama      | 경영국기술     | 부장      | gyli@korea-np.co.jp      | NULL        | 2003-09-18 13:46:30.763 |
| hyeon1215       | 리현민           | 714548hm      | 조선신보사     | 부부장     |                          | NULL        | 2003-09-05 16:03:58.927 |
| kangiruk        | 강이룩           | 75967596      | 편집국 정치부   | 기자      | ilk@korea-np.co.jp       | NULL        | 2003-09-09 15:25:21.467 |
| kangnao731      | 강나오           | yokohama      | 편집국　인민조선부 | 기자      | nao.pk@korea-np.co.jp    | NULL        | 2003-11-08 11:40:56.947 |
| kangtaesong     | 강태성           | 8723741kts    | 편집국       | 부장      |                          | NULL        | 2003-09-16 16:57:45.060 |
| kim-yunsun      | 김윤순           | ommagajoa     | 편집국       | 기자      | ys@korea-np.co.jp        | NULL        | 2003-09-16 12:02:44.967 |
| kjiyoeng        | 김지영           | jk6688y       | 편집국       | 부장      | j-kim@korea-np.co.jp     | NULL        | 2003-09-17 16:47:41.700 |
| kumsun          | 로금순           | 1205          | 편집국 사진부   | 기자      | kum@korea-np.co.jp       | NULL        | 2004-02-05 15:13:17.343 |
| lee tong ho     | 리동호           | 8265ton       | 편집국 동포생활부 | 기자      | tong@korea-np.co.jp      | NULL        | 2005-04-05 14:58:24.280 |
| lth777          | 리태호           | sin77bo       | 조선신보사     | 기사      | leeteho@korea-np.co.jp   | NULL        | 2004-03-01 10:47:32.557 |
| mago            | 최량선           | mago816       | 편성교정부     | 부원      | crs@korea-np.co.jp       | NULL        | 2004-02-25 16:08:47.750 |
| ms1220          | 문성희           | zongbi7035    | 편집국       | 부장      | songhi@korea-np.co.jp    | NULL        | 2003-09-16 12:00:48.967 |
| mun05gwang07son | 문광선           | 5s18x26t0     | 펀집국       | 부장      |                          | NULL        | 2003-09-16 10:47:10.090 |
| myongfalee      | 리명화           | myongfalee    | 동포생활부     | 기자      | myong@korea-np.co.jp     | NULL        | 2003-09-22 14:23:59.787 |
| myonguk0727     | 김명욱           | osaka727      | 편집국       | 기자      | myonguk@korea-np.co.jp   | NULL        | 2003-09-16 11:57:13.577 |
| risangho        | risangho      | kpsang21      | NULL      | NULL    | NULL                     | NULL        | 2014-03-14 10:22:10.000 |
| rim wang ho     | 림왕호           | 1960          | 편집국       | 부국장     |                          | NULL        | 2004-04-01 14:25:13.777 |
| rim0216         | 림왕호           | rim0216       | 편집국       | 부국장     |                          | NULL        | 2003-09-12 11:44:23.030 |
| sangyong        | 리상영           | rsy4028-34    | 편집국       | 기자      | sang-yong@korea-np.co.jp | NULL        | 2003-09-16 14:00:18.153 |
| sang-yong       | 리상영           | 34344028      | 편집국       | 기자      | sang-yong@korea-np.co.jp | NULL        | 2004-01-20 11:43:17.287 |
| tigers03915     | 엄정언           | 039150319t    | 편집국       | 부국장     | jom@korea-np.co.jp       | NULL        | 2003-09-16 14:30:11.887 |
| yuhyon0707      | 로금순           | kumhana081    | 편집국       | 기자      | kum@korea-np.co.jp       | NULL        | 2003-09-13 14:02:01.467 |
| spkpm           | KPM           | kpm140314     | NULL      | NULL    | NULL                     | NULL        | 2006-02-16 00:00:00.000 |
| cukpm           | KPM           | 0415216       | NULL      | NULL    | NULL                     | NULL        | 2006-02-16 00:00:00.000 |
| romine          | romine        | almon22       | NULL      | NULL    | NULL                     | NULL        | 2014-03-14 10:22:10.000 |
| kimjaesun       | kimjaesun     | omma23        | NULL      | NULL    | NULL                     | NULL        | 2014-03-14 10:22:10.000 |
| pkhogang        | pkhogang      | hogang24      | NULL      | NULL    | NULL                     | NULL        | 2014-03-14 10:22:10.000 |
|                 |


#### Translation

- // url을 호출할때 먼저 이 메쏘드가 호출된다.
  - When calling url, this method is called first.
- // url에서 추출한 메쏘드가 정확하면 파라메터와 함께 메쏘드를 추출한다.
  - If the method extracted from url is correct, the method is extracted with parameters.
- // 존함처리
  - Special treatment for the names from Kim family
- // 불멸의 령도 등록부경로 얻는다.
  - ???? 
- // 우리의 프로그람 등록부경록얻는다.
  - ????

