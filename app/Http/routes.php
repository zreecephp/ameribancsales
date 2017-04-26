<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');



if(Auth::user())
{
	Route::get('/my', 'My\MyController@index');
}
else
{
	Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@Index']);
	//Route::get('/my', 'My\MyController@index');
}

Route::get('about', 'HomeController@about');
Route::get('thank-you', ['as' => 'thankYou', 'uses' => 'HomeController@ThankYou']);
Route::get('thank-you-tag', ['as' => 'thankYouTag', 'uses' => 'HomeController@ThankYouTag']);
Route::get('thank-you-question', ['as' => 'thankYouTagQ', 'uses' => 'HomeController@ThankYouTagQ']);
Route::get('thank-you-not-qualified', ['as' => 'thankYouNotQual', 'uses' => 'HomeController@ThankYouNotQual']);
Route::get('contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::post('contactSubmit', 'HomeController@ContactSubmit');
Route::get('business-service-information', 'HomeController@BusinessServiceInfo');
Route::post('businessServiceSubmit', 'HomeController@BusinessServiceSubmit');
Route::get('customer-service/{serviceType?}', 'HomeController@CustomerService')->where('serviceType', '(.*)');
Route::post('customerServiceSubmit', 'HomeController@CustomerServiceSubmit');
//Route::get('template', 'HomeController@Template');

Route::get('services', 'Services\ServicesController@index');

Route::get('services/credit-card-processing', 'Services\ServicesController@CreditCardProcessing');
Route::get('services/tablet-card-processing', 'Services\ServicesController@TabletCardProcessing');
Route::get('services/groovv', 'Services\ServicesController@Groovv');
Route::get('services/merchant-cards', 'Services\ServicesController@MerchantCards');
Route::get('services/check-imaging', 'Services\ServicesController@CheckImaging');
Route::get('services/merchant-loans', 'Services\ServicesController@MerchantLoans');
Route::get('services/mobile-solutions', 'Services\ServicesController@MobileSolutions');
Route::get('services/authorize-net', 'Services\ServicesController@AuthorizeNet');
Route::get('services/emv', 'Services\ServicesController@EMV');
Route::get('services/apple-pay', 'Services\ServicesController@ApplePay');

Route::get('industry/news_public', ['as' => 'industry', 'uses' => 'Industry\IndustryController@News_public']);

Route::get('career', ['as' => 'career', 'uses' => 'Career\CareerController@index']);
Route::post('career/careerSubmit', 'Career\CareerController@CareerSubmit');
Route::get('career/futurecareer/{src}', ['as' => 'career', 'uses' => 'Career\CareerController@FutureCareer']);
//Route::get('career/futurecareer/src={src}&time={time}', ['as' => 'career', 'uses' => 'Career\CareerController@FutureCareer']);
Route::get('career/futurecareer', ['as' => 'career', 'uses' => 'Career\CareerController@FutureCareer']);
Route::post('thankyouQSubmit', 'Career\CareerController@ThankYouQSubmit');
Route::get('career/recruiter', ['as' => 'career', 'uses' => 'Career\CareerController@RecruiterCareer']);
Route::get('career/career_main', ['middleware' => 'auth', 'uses' => 'Career\CareerController@CareerMain']);
Route::get('career/introduction',  ['middleware' => 'auth', 'uses' => 'Career\CareerController@Introduction']);
Route::get('career/selection', ['middleware' => 'auth', 'uses' => 'Career\CareerController@Selection']);
Route::get('career/training', ['middleware' => 'auth', 'uses' => 'Career\CareerController@Training']);
Route::get('career/lead-support-program', ['middleware' => 'auth', 'uses' => 'Career\CareerController@Leads']);
Route::get('career/sales', ['middleware' => 'auth', 'uses' => 'Career\CareerController@Sales']);
Route::get('career/equipment', ['middleware' => 'auth', 'uses' => 'Career\CareerController@Equipment']);
Route::get('career/compensation', ['middleware' => 'auth', 'uses' => 'Career\CareerController@Compensation']);
Route::get('career/benefits', ['middleware' => 'auth', 'uses' => 'Career\CareerController@Benefits']);
Route::get('career/advancement', ['middleware' => 'auth', 'uses' => 'Career\CareerController@Advancement']);
Route::get('career/next-step', ['middleware' => 'auth', 'uses' => 'Career\CareerController@NextStep']);
Route::get('career/career-thank-you', ['as' => 'careerThankYou', 'uses' =>'Career\CareerController@CareerThankYou']);
Route::get('career/areas', 'Career\CareerController@Areas');
Route::get('career/city/{cityName}', array('as' => 'city', 'uses' => 'Career\CareerController@City'));
Route::post('career/stepcountdown', 'Career\CareerController@StepCountdown');
Route::post('career/stepwealth', 'Career\CareerController@StepWealth');
Route::get('career/partnersworkwith',  ['middleware' => 'auth', 'uses' => 'Career\CareerController@Partnersworkwith']);
Route::get('career/industryoverview',  ['middleware' => 'auth', 'uses' => 'Career\CareerController@Industryoverview']);
Route::get('career/wordfromowners',  ['middleware' => 'auth', 'uses' => 'Career\CareerController@Wordfromowners']);
Route::get('career/job_application', 'Career\CareerController@Job_Application');

//zr

Route::get('wealthpage', ['as' => 'weatlhpage', 'uses' => 'WealthPage\WealthPageController@index']);
Route::get('wealthpage/introduction',  ['middleware' => 'auth', 'uses' => 'WealthPage\WealthPageController@Introduction']);
Route::get('wealthpage/opportunity',  ['middleware' => 'auth', 'uses' => 'WealthPage\WealthPageController@Opportunity']);
Route::get('wealthpage/testimonials',  ['middleware' => 'auth', 'uses' => 'WealthPage\WealthPageController@Testimonials']);
Route::get('wealthpage/research',  ['middleware' => 'auth', 'uses' => 'WealthPage\WealthPageController@Research']);
Route::get('wealthpage/faqs',  ['middleware' => 'auth', 'uses' => 'WealthPage\WealthPageController@Faqs']);
Route::get('wealthpage/next-step',  ['middleware' => 'auth', 'uses' => 'WealthPage\WealthPageController@NextStep']);

//zr end

Route::get('admin', ['as' => 'admin', 'uses' => 'Admin\AdminController@Index']);
Route::get('admin/getUsers', 'Admin\AdminController@GetUsers');
Route::get('admin/register', 'Admin\AdminController@Register');
Route::get('admin/userDetail/{userid}', 'Admin\AdminController@UserDetail');
Route::post('admin/userDetailInsert', 'Admin\AdminController@UserDetailInsert');
Route::post('admin/userDetailUpdate', 'Admin\AdminController@UserDetailUpdate');
Route::post('admin/sendAnEmail', 'Admin\AdminController@SendAnEmail');
Route::get('admin/traineeoverview', 'Admin\AdminController@TraineeOverview');
Route::get('admin/graduates', 'Admin\AdminController@Graduates');

Route::post('admin/index', 'Admin\AdminController@Index');

Route::get('my/news_private', 'Industry\IndustryController@News_private');
Route::get('my/post_news', 'Industry\IndustryController@Post_news');
Route::post('my/postnewssubmit', 'Industry\IndustryController@PostNewsSubmit');

Route::get('my', 'My\MyController@index');
Route::get('my/masters', 'My\MyController@Masters');
Route::get('my/mastersVideo/{name}', 'My\MyController@MastersVideo');
Route::get('my/docsAndForms', 'My\MyController@DocsAndForms');
Route::get('my/docsAndFormsTraining', 'My\MyController@DocsAndFormsTraining');

Route::get('my/training/formsPages/requirementsL1', 'My\MyController@RequirementsL1');
Route::get('my/training/formsPages/requirementsL2', 'My\MyController@RequirementsL2');
Route::get('my/training/formsPages/requirementsL3', 'My\MyController@RequirementsL3');
Route::get('my/training/formsPages/restricted', 'My\MyController@Restricted');
Route::get('my/training/formsPages/prohibited', 'My\MyController@Prohibited');

//Route::get('my/bsCard', 'My\MyController@BsCard');
Route::get('my/bsCard', ['as' => 'bscardsubmit', 'uses' => 'My\MyController@BsCard']);
Route::post('my/businessCardSubmit', 'My\MyController@BusinessCardSubmit');
Route::get('my/register', 'My\MyController@Register');
Route::post('my/registerSubmit', 'My\MyController@RegisterSubmit');

Route::get('my/training/completion/{moduleNo}/{quizNo}', ['as' => 'completion', 'uses' => 'My\TrainingController@Completion']);

Route::get('my/training/module1', ['as' => 'module1', 'uses' => 'My\TrainingController@Module1']);
Route::get('my/training/module2', ['as' => 'module2', 'uses' => 'My\TrainingController@Module2']);
Route::get('my/training/module3', ['as' => 'module3', 'uses' => 'My\TrainingController@Module3']);
Route::get('my/training/module4', ['as' => 'module4', 'uses' => 'My\TrainingController@Module4']);
Route::get('my/training/module5', ['as' => 'module5', 'uses' => 'My\TrainingController@Module5']);
Route::get('my/training/module6', ['as' => 'module6', 'uses' => 'My\TrainingController@Module6']);
Route::get('my/training/module7', ['as' => 'module7', 'uses' => 'My\TrainingController@Module7']);

Route::get('my/training/corporateTour', 'My\TrainingController@CorporateTour');
Route::post('my/training/corporateTourSubmit', 'My\TrainingController@CorporateTourSubmit');
Route::get('my/training/amexCcdc', 'My\TrainingController@AmexCcdc');
Route::post('my/training/AmexCcdcSubmit', 'My\TrainingController@AmexCcdcSubmit');
Route::get('my/training/amexCcdcRecap', 'My\TrainingController@AmexCcdcRecap');
Route::post('my/training/AmexCcdcRecapSubmit', 'My\TrainingController@AmexCcdcRecapSubmit');
Route::get('my/training/ampIntro', 'My\TrainingController@AmpIntro');
Route::post('my/training/ampIntroSubmit', 'My\TrainingController@AmpIntroSubmit');
Route::get('my/training/ampPresentation', 'My\TrainingController@AmpPresentation');
Route::post('my/training/ampPresentationSubmit', 'My\TrainingController@AmpPresentationSubmit');
Route::get('my/training/ampRecap', 'My\TrainingController@AmpRecap');
Route::post('my/training/ampRecapSubmit', 'My\TrainingController@AmpRecapSubmit');
Route::get('my/training/appointments', 'My\TrainingController@Appointments');
Route::post('my/training/appointmentsSubmit', 'My\TrainingController@AppointmentsSubmit');
Route::get('my/training/appointmentSetting', 'My\TrainingController@AppointmentSetting');
Route::post('my/training/appointmentSettingSubmit', 'My\TrainingController@AppointmentSettingSubmit');


Route::get('my/training/closingOverview', 'My\TrainingController@ClosingOverview');
Route::post('my/training/closingOverviewSubmit', 'My\TrainingController@ClosingOverviewSubmit');
Route::get('my/training/consultationOverview', 'My\TrainingController@ConsultationOverview');
Route::post('my/training/consultationOverviewSubmit', 'My\TrainingController@ConsultationOverviewSubmit');
Route::get('my/training/creditCard01', 'My\TrainingController@CreditCard01');
Route::post('my/training/creditCard01Submit', 'My\TrainingController@CreditCard01Submit');
Route::get('my/training/creditCard02', 'My\TrainingController@CreditCard02');
Route::post('my/training/creditCard02Submit', 'My\TrainingController@CreditCard02Submit');
Route::get('my/training/creditCard03', 'My\TrainingController@CreditCard03');
Route::post('my/training/creditCard03Submit', 'My\TrainingController@CreditCard03Submit');
Route::get('my/training/emvNfcOverview', 'My\TrainingController@EmvNfcOverview');
Route::post('my/training/EmvNfcOverviewSubmit', 'My\TrainingController@EmvNfcOverviewSubmit');
Route::get('my/training/emvNfcRecap', 'My\TrainingController@EmvNfcRecap');
Route::post('my/training/EmvNfcRecapSubmit', 'My\TrainingController@EmvNfcRecapSubmit');

Route::get('my/training/emvNfcServiceSegment', 'My\TrainingController@EmvNfcServiceSegment');
Route::post('my/training/EmvNfcServiceSegmentSubmit', 'My\TrainingController@EmvNfcServiceSegmentSubmit');
Route::get('my/training/firstFiveMin', 'My\TrainingController@FirstFiveMin');
Route::post('my/training/firstFiveMinSubmit', 'My\TrainingController@FirstFiveMinSubmit');

Route::get('my/training/firstClose', 'My\TrainingController@FirstClose');
Route::post('my/training/firstCloseSubmit', 'My\TrainingController@FirstCloseSubmit');
Route::get('my/training/secondClose', 'My\TrainingController@SecondClose');
Route::post('my/training/secondCloseSubmit', 'My\TrainingController@SecondCloseSubmit');
Route::get('my/training/thirdClose', 'My\TrainingController@ThirdClose');
Route::post('my/training/thirdCloseSubmit', 'My\TrainingController@ThirdCloseSubmit');

Route::get('my/training/meetTrainer', 'My\TrainingController@MeetTrainer');
Route::post('my/training/meetTrainerSubmit', 'My\TrainingController@MeetTrainerSubmit');
Route::get('my/training/merchantApp', 'My\TrainingController@MerchantApp');
Route::post('my/training/merchantAppSubmit', 'My\TrainingController@MerchantAppSubmit');

Route::get('my/training/opportunity', 'My\TrainingController@Opportunity');
Route::post('my/training/opportunitySubmit', 'My\TrainingController@OpportunitySubmit');
Route::get('my/training/tactics', 'My\TrainingController@Tactics');
Route::post('my/training/tacticsSubmit', 'My\TrainingController@TacticsSubmit');

Route::get('my/training/cert', 'My\TrainingController@Cert');

Route::get('my/training/moduleMaster', ['as' => 'moduleMaster', 'uses' => 'My\TrainingController@moduleMaster']);
Route::get('my/training/ma_opportunity', 'My\TrainingController@Ma_opportunity');
Route::post('my/training/ma_opportunitySubmit', 'My\TrainingController@Ma_opportunitySubmit');

Route::get('my/training/ma_controllingsuccess', 'My\TrainingController@Ma_controllingsuccess');
Route::post('my/training/ma_controllingsuccessSubmit', 'My\TrainingController@Ma_controllingsuccessSubmit');

Route::get('my/training/ma_barn', 'My\TrainingController@Ma_barn');
Route::post('my/training/ma_barnSubmit', 'My\TrainingController@Ma_barnSubmit');

Route::get('my/training/ma_presentationobj', 'My\TrainingController@Ma_presentationobj');
Route::post('my/training/ma_presentationobjSubmit', 'My\TrainingController@Ma_presentationobjSubmit');

Route::get('my/training/ma_partnerobj', 'My\TrainingController@Ma_partnerobj');
Route::post('my/training/ma_partnerobjSubmit', 'My\TrainingController@Ma_partnerobjSubmit');

Route::get('my/training/ma_unsureobj', 'My\TrainingController@Ma_unsureobj');
Route::post('my/training/ma_unsureobjSubmit', 'My\TrainingController@Ma_unsureobjSubmit');

Route::get('my/training/ma_callin', 'My\TrainingController@Ma_callin');
Route::post('my/training/ma_callinSubmit', 'My\TrainingController@Ma_callinSubmit');

Route::get('my/training/ma_eqvsiq', 'My\TrainingController@Ma_eqvsiq');
Route::post('my/training/ma_eqvsiqSubmit', 'My\TrainingController@Ma_eqvsiqSubmit');

Route::get('my/handbook/', 'My\HandbookController@Index');
Route::get('my/handbook/opportunity', 'My\HandbookController@Opportunity');
Route::get('my/handbook/topPerformer', 'My\HandbookController@TopPerformer');
Route::get('my/handbook/resources', 'My\HandbookController@Resources');
Route::get('my/handbook/compensation', 'My\HandbookController@Compensation');
Route::get('my/handbook/salesMarket', 'My\HandbookController@SalesMarket');
Route::get('my/handbook/presentation', 'My\HandbookController@Presentation');
Route::get('my/handbook/prospecting', 'My\HandbookController@Prospecting');
Route::get('my/handbook/leads', 'My\HandbookController@Leads');
Route::get('my/handbook/presentationTips', 'My\HandbookController@PresentationTips');
Route::get('my/handbook/fees', 'My\HandbookController@Fees');
Route::get('my/handbook/afterTheSale', 'My\HandbookController@AfterTheSale');
Route::get('my/handbook/barn', 'My\HandbookController@Barn');
Route::get('my/handbook/referenceLetters', 'My\HandbookController@ReferenceLetters');
Route::get('my/handbook/faqs', 'My\HandbookController@Faqs');
Route::get('my/handbook/commonTerms', 'My\HandbookController@CommonTerms');
Route::get('my/handbook/aboutUs', 'My\HandbookController@AboutUs');

//Route::get('career/adresponseemail/resume1', 'Career\CareerController@Adresponse');


Route::get('reports', 'Report\ReportController@index');
Route::get('reports/getUsers', 'Report\ReportController@GetUsers');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


