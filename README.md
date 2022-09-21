# Moyasar

## Usage

## view page
- copy code from view-page.php in your view and don't forget to change params [element,amount,currency,description,publishable_api_key,callback_url,methods] 

## routes page 
- create route with callback_url_route pointing to callback_url_route_function to do processing after payment operation

## Controller page 
- create callback_url_route_function() to receive response after payment process


## Test Cards
- Visa  4111111111111111    Successful  Succeeded!
- Visa    4012888888881881    Failed  Unable to process the purchase transaction
- Visa    4123450131000508    Failed  3-D Secure transaction attempt failed (Not Enrolled)
- MasterCard  5457210001000092    Failed  Insufficient Funds
- MasterCard  5204730000002514    Failed  Declined
- MasterCard  5204730000001177    Failed  Invalid Card. Unable to store the card
- MasterCard  5555555555554444    Failed  Unable to process the purchase transaction
- MasterCard  5105105105105100    Failed  Unable to process the purchase transaction

