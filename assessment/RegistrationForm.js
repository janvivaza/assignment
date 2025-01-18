import React, { useState } from 'react';


const useValidation = () => {
  
  const [errors, setErrors] = useState({});

  
  const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const usernameRegex = /^.{1,4}$/; 
  
  
  const validate = (formData) => {
    let newErrors = {};

    
    if (!usernameRegex.test(formData.username)) {
      newErrors.username = "Username must be 4 characters or less.";
    }

    
    if (!emailRegex.test(formData.email)) {
      newErrors.email = "Invalid email format.";
    }


    if (formData.password !== formData.confirmPassword) {
      newErrors.password = "Passwords do not match.";
    }

    setErrors(newErrors);

    return newErrors;
  };

  return { errors, validate };
};

const RegistrationForm = () => {
  // State for form fields
  const [formData, setFormData] = useState({
    username: '',
    email: '',
    password: '',
    confirmPassword: '',
  });

  
  const { errors, validate } = useValidation();

  
  const handleInputChange = (e) => {
    const { name, value } = e.target;
    setFormData({
      ...formData,
      [name]: value,
    });
  };

  
  const handleSubmit = (e) => {
    e.preventDefault();


    const validationErrors = validate(formData);

    
    if (Object.keys(validationErrors).length === 0) {
      console.log('Form submitted successfully:', formData);
      alert('Form submitted successfully!');
    } else {
      console.log('Form has errors:', validationErrors);
      alert('Please correct the errors in the form.');
    }
  };

  return (
    <div className="registration-form">
      <h2>Register</h2>
      <form onSubmit={handleSubmit}>
        <div>
          <label htmlFor="username">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            value={formData.username}
            onChange={handleInputChange}
            required
          />
          {errors.username && <p style={{ color: 'red' }}>{errors.username}</p>}
        </div>

        <div>
          <label htmlFor="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            value={formData.email}
            onChange={handleInputChange}
            required
          />
          {errors.email && <p style={{ color: 'red' }}>{errors.email}</p>}
        </div>

        <div>
          <label htmlFor="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            value={formData.password}
            onChange={handleInputChange}
            required
          />
        </div>

        <div>
          <label htmlFor="confirmPassword">Confirm Password</label>
          <input
            type="password"
            id="confirmPassword"
            name="confirmPassword"
            value={formData.confirmPassword}
            onChange={handleInputChange}
            required
          />
          {errors.password && <p style={{ color: 'red' }}>{errors.password}</p>}
        </div>

        <button type="submit">Register</button>
      </form>
    </div>
  );
};

export default RegistrationForm;
