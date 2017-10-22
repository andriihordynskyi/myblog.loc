<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <title>Learning bootstrap</title>
</head>

<body>
<div class="container-fluid">
    <h1>Hello World!</h1>
    <p>Resize the browser window to see the effect.</p>
    <p>The columns will automatically stack on top of each other when the screen is less than 768px wide.</p>
    <div class="row">
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-4">.col-sm-4</div>
    </div>
    <div class="row">
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-8">.col-sm-8</div>
    </div>
    <div class="row">
        <div class="col-sm-3">.col-sm-3</div>
        <div class="col-sm-3">.col-sm-3</div>
        <div class="col-sm-3">.col-sm-3</div>
        <div class="col-sm-3">.col-sm-3</div>
    </div>
    <h1>H1 heading with
        <small>small</small>
        tag
    </h1>
    <h2>H2 heading with
        <small>small</small>
        tag
    </h2>
    <h3>H3 heading with
        <small>small</small>
        tag
    </h3>
    <h4>H4 heading with
        <small>small</small>
        tag
    </h4>
    <h5>H5 heading with
        <small>small</small>
        tag
    </h5>
    <h6>H6 heading with
        <small>small</small>
        tag
    </h6>

    <dl>
        <dt>Coffee</dt>
        <dd>- black hot drink</dd>
        <dt>Milk</dt>
        <dd>- white cold drink</dd>
    </dl>

    <h2>Contextual Colors</h2>
    <p>Use the contextual classes to provide "meaning through colors":</p>
    <p class="text-muted">This text is muted.</p>
    <p class="text-primary">This text is important.</p>
    <p class="text-success">This text indicates success.</p>
    <p class="text-info">This text represents some information.</p>
    <p class="text-warning">This text represents a warning.</p>
    <p class="text-danger">This text represents danger.</p>
    <p class="bg-primary">This text is important.</p>
    <p class="bg-success">This text indicates success.</p>
    <p class="bg-info">This text represents some information.</p>
    <p class="bg-warning">This text represents a warning.</p>
    <p class="bg-danger">This text represents danger.</p>
    <h2>Typography</h2>
    <p class="text-left">Left-aligned text.</p>
    <p class="text-right">Right-aligned text.</p>
    <p class="text-center">Center-aligned text.</p>
    <p class="text-justify">Justified text. Justified text. Justified text. Justified text. Justified text. Justified
        text.</p>
    <p class="text-nowrap">No wrap text. No wrap text. No wrap text. No wrap text.</p>
    <p><strong>Tip:</strong> Try to resize the browser window to see the behaviour of justify and nowrap.</p>
    <p class="text-lowercase">Lowercased text.</p>
    <p class="text-uppercase">Uppercased text.</p>
    <p class="text-capitalize">Capitalized text.</p>
    <ul class="list-unstyled">
        <li>Coffee</li>
        <li>Tea
            <ul>
                <li>Black tea</li>
                <li>Green tea</li>
            </ul>
        </li>
        <li>Milk</li>
    </ul>
    <ul class="list-inline">
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>
    <h2>Basic Table</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
    <h2>Basic Table</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
    <table class="table table-hover table-condensed">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
    <h2>Contextual Classes</h2>
    <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active,
        .success, .info, .warning, and .danger.</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Default</td>
            <td>Defaultson</td>
            <td>def@somemail.com</td>
        </tr>
        <tr class="success">
            <td>Success</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr class="danger">
            <td>Danger</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr class="info">
            <td>Info</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr class="warning">
            <td>Warning</td>
            <td>Refs</td>
            <td>bo@example.com</td>
        </tr>
        <tr class="active">
            <td>Active</td>
            <td>Activeson</td>
            <td>act@example.com</td>
        </tr>
        </tbody>
    </table>
    <div class="table-responsive">
        <h2>Contextual Classes</h2>
        <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active,
            .success, .info, .warning, and .danger.</p>
        <table class="table">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Default</td>
                <td>Defaultson</td>
                <td>def@somemail.com</td>
            </tr>
            <tr class="success">
                <td>Success</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr class="danger">
                <td>Danger</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr class="info">
                <td>Info</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
            <tr class="warning">
                <td>Warning</td>
                <td>Refs</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="active">
                <td>Active</td>
                <td>Activeson</td>
                <td>act@example.com</td>
            </tr>
            </tbody>
        </table>
    </div>
    <h2>Rounded Corners</h2>
    <p>The .img-rounded class adds rounded corners to an image (not available in IE8):</p>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlMgeMbXY4dc02EorLw-BYhPEfGxmHxDUwAZxjIRCBYpHOz8vKHQ"
         class="img-rounded" alt="Cinque Terre">
    <h2>Circle</h2>
    <p>The .img-circle class shapes the image to a circle (not available in IE8):</p>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlMgeMbXY4dc02EorLw-BYhPEfGxmHxDUwAZxjIRCBYpHOz8vKHQ"
         class="img-circle" alt="Cinque Terre">
    <h2>Thumbnail</h2>
    <p>The .img-thumbnail class creates a thumbnail of the image:</p>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlMgeMbXY4dc02EorLw-BYhPEfGxmHxDUwAZxjIRCBYpHOz8vKHQ"
         class="img-thumbnail" alt="Cinque Terre">
    <div class="jumbotron">
        <h1>Bootstrap Tutorial</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
            responsive, mobile-first projects on the web.</p>
    </div>
    <p>This is some text.</p>
    <p>This is another text.</p>
    <div class="page-header">
        <h1>Well</h1>
    </div>
    <div class="well well-sm">Small Well</div>
    <div class="well">Medium Well</div>
    <div class="well well-lg">Large Well</div>
    <div class="page-header">
        <h1>Alerts</h1>
    </div>
    <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Indicates a successful or positive action. <a href="#" class="alert-link">read this
            message.</a>
    </div>

    <div class="alert alert-info alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Info!</strong> Indicates a neutral informative change or action. <a href="#" class="alert-link">read
            this message.</a>
    </div>

    <div class="alert alert-warning alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Warning!</strong> Indicates a warning that might need attention. <a href="#" class="alert-link">read
            this message.</a>
    </div>

    <div class="alert alert-danger alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Danger!</strong> Indicates a dangerous or potentially negative action. <a href="#" class="alert-link">read
            this message.</a>
    </div>
    <div class="page-header">
        <h1>Buttons</h1>
    </div>
    <button type="button" class="btn">Basic</button>
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-link">Link</button>
    <a href="#" class="btn btn-info" role="button">Link Button</a>
    <button type="button" class="btn btn-info">Button</button>
    <input type="button" class="btn btn-info" value="Input Button">
    <input type="submit" class="btn btn-info" value="Submit Button">
    <div class="page-header">
        <h1>Sizes of button</h1>
    </div>
    <button type="button" class="btn btn-primary btn-lg">Large</button>
    <button type="button" class="btn btn-primary btn-md">Medium</button>
    <button type="button" class="btn btn-primary btn-sm">Small</button>
    <button type="button" class="btn btn-primary btn-xs">XSmall</button>
    <div class="page-header">
        <h1>Block button</h1>
    </div>
    <button type="button" class="btn btn-danger btn-block">Block Button</button>
    <div class="page-header">
        <h1>Active/Disabled button</h1>
    </div>
    <button type="button" class="btn btn-primary active">Active Primary</button>
    <button type="button" class="btn btn-primary disabled">Disabled Primary</button>

    <div class="page-header">
        <h1>Button group</h1>
    </div>
    <div class="btn-group-md">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Sony</button>
    </div>
    <div class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Sony</button>
    </div>
    <h2>Justified Button Groups</h2>
    <p>To span the entire width of the screen, use the .btn-group-justified class:</p>
    <div class="btn-group btn-group-justified">
        <a href="#" class="btn btn-primary">Apple</a>
        <a href="#" class="btn btn-primary">Samsung</a>
        <a href="#" class="btn btn-primary">Sony</a>
    </div>
    <h2>Dropdown</h2>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Samsung</button>
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Sony <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Tablet</a></li>
                <li><a href="#">Smartphone</a></li>
            </ul>
        </div>
    </div>
    <h2>Split Buttons</h2>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Sony</button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Tablet</a></li>
            <li><a href="#">Smartphone</a></li>
        </ul>
    </div>
    <div class="page-header">
        <h1>Glyphonics</h1>
    </div>
    <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p>
    <p>Envelope icon as a link:
        <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
    </p>
    <p>Search icon: <span class="glyphicon glyphicon-search"></span></p>
    <p>Search icon on a button:
        <button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-search"></span> Search
        </button>
    </p>
    <p>Search icon on a styled button:
        <button type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-search"></span> Search
        </button>
    </p>
    <p>Print icon: <span class="glyphicon glyphicon-print"></span></p>
    <p>Print icon on a styled link button:
        <a href="#" class="btn btn-success btn-lg">
            <span class="glyphicon glyphicon-print"></span> Print
        </a>
    </p>
    <div class="page-header">
        <h1>Badge</h1>
    </div>
    <a href="#">News<span class="badge">10</span></a><br>
    <a href="#">Updates<span class="badge">4</span></a><br>
    <a href="#">Comments<span class="badge">7</span></a><br><br>
    <button type="button" class="btn btn-danger">Danger <span class="badge">9</span></button>
    <div class="page-header">
        <h1>Label</h1>
    </div>
    <h1>Example <span class="label label-default">Default</span></h1>
    <h2>Example <span class="label label-primary">Primary</span></h2>
    <h3>Example <span class="label label-danger">Danger</span></h3>
    <h4>Example <span class="label label-warning">Warning</span></h4>
    <h5>Example <span class="label label-info">Info</span></h5>
    <h6>Example <span class="label label-success">Success</span></h6>
    <div class="page-header">
        <h1>Progress</h1>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
        <span class="sr-only">70% complete</span>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">70%</div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">40% Complete</div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">50% Complete </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">70% Complete</div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">40% Complete</div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">50% Complete </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">70% Complete</div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">70% Complete</div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">40% Complete</div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">50% Complete </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">60% Complete </div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:40%">
            Free Space
        </div>
        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:10%">
            Warning
        </div>
        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" style="width:20%">
            Danger
        </div>
    </div>
</div>
</body>
</html>


