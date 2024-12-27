import React, { useState } from 'react';

const CounterApp = () => {
  const [count, setCount] = useState(0);

  const increment = () => setCount(count + 1);
  const decrement = () => setCount(count - 1);
  const reset = () => setCount(0);

  return (
    <div style={{
      backgroundColor: '#4682B4',
      color: 'white',
      minHeight: '100vh',
      minWidth:'216vh',
      display: 'flex',
      flexDirection: 'column',
      alignItems: 'center',
      justifyContent: 'center',
      fontFamily: 'Arial, sans-serif',
    }}>
      <h1>React Web</h1>
      <div style={{
        fontSize: '50px',
        margin: '20px 0',
        fontWeight: 'bold',
        
      }}>
        {count}
      </div>
      <div>
        <button
          onClick={decrement}
          style={{
            margin: '5px',
            padding: '10px 20px',
            fontSize: '16px',
            backgroundColor: '#333',
            color: 'white',
            border: 'none',
            borderRadius: '5px',
            cursor: 'pointer',
            
          }}
        >
          Decrement
        </button>
        <button
            onClick={increment}
            style={{
            margin: '5px',
            padding: '10px 20px',
            fontSize: '16px',
            backgroundColor: '#333',
            color: 'white',
            border: 'none',
            borderRadius: '5px',
            cursor: 'pointer',
            
          }}
        >
          Increment
        </button>
        <button
            onClick={reset}
            style={{
            margin: '5px',
            padding: '10px 20px',
            fontSize: '16px',
            backgroundColor: '#333',
            color: 'white',
            border: 'none',
            borderRadius: '5px',
            cursor: 'pointer',
            
          }}
        >
          Reset
        </button>
      </div>
    </div>
  );
};

export default CounterApp;
