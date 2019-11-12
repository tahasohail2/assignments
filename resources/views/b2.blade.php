<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>

</head>
<body>
	@extends('b1')
	@section('nnn')
	@parent
	@endsection
	<table>
		<br><b>REGISTRATION FORM</b></br>
		<tr>
			<td>
				Username:
				<td>
					<input type="name"placeholder= "Enter Username" name="POST">
				</td>
				<tr>
					<td>
						Password :
						<td>
							<input type="Password"placeholder="Enter Password" name="POST">
						</td>
						<tr>
							<td>
								Gender:
								<td>
								<input type="radio" name="Gender">Male
								<input type="radio" name="Gender">Female
								<input type="radio" name="Gender">Other
								
							</td>

							</td>
						</tr>
						<tr>
							<td>
								Email :
								<td>
									<input type="name"placeholder="A123@Email.com" name="POST">
                                 </td>
                                 <tr>
                                 	<td>
                                 		Phone No:
                                 		<td>
                                 			<select>
                                 				<option>+91</option>
                                 				<option>+92</option>
                                 				<option>+93</option>
                                 				<option>+94</option>
                                 				<option>+95</option>
                                 			</select>
                                 			<input type="number"placeholder="123456789" name="POST">
                                 		</td>
                                 	</td>
                                 </tr>
							</td>
						</tr>


					</td>
				</tr>
			</td>
		</tr>
		
	</table>
<button>submit</button>




</body>
</html>