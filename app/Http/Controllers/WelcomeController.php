//@return void

public function __construct()
{
  $this->middleware('guest');
}

@return responsive

public function index()
{
  return view('welcome')
}
 
