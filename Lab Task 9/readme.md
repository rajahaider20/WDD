# Sign Up Form with Validation

A simple, responsive sign-up form with client-side validation built using HTML, CSS, and JavaScript.

## Features

- Clean and modern user interface
- Real-time form validation
- Responsive design
- Error message display for invalid inputs
- Password confirmation matching
- Email format validation
- Phone number validation
- Required field validation

## Form Fields

The form includes the following fields:
- **First Name** - Required text field
- **Last Name** - Required text field
- **Phone** - Required phone number field
- **Email** - Required email field with format validation
- **Password** - Required password field
- **Confirm Password** - Required field that must match the password

## Usage

1. Fill in all the required fields in the form
2. The form will validate inputs when you attempt to submit
3. Error messages will appear below each field if validation fails
4. All fields must be valid before the form can be successfully submitted

## Styling

The form features:
- Centered layout with maximum width of 400px
- Light gray background (#f2f2f2)
- White form container with rounded corners
- Green submit button with hover effect
- Red error messages for invalid inputs
- Box shadow for visual depth

## Validation Requirements

Create a `script.js` file with validation logic for:
- All fields are required (non-empty)
- Email must be in valid format
- Phone number must be in valid format
- Password must meet security requirements
- Confirm Password must match Password field