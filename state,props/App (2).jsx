import React from 'react';

const ListView = () => {
  const points = [
    { id: 1, text: 'Use Array.map' },
    { id: 2, text: 'Not a for loop' },
    { id: 3, text: 'Give each item a unique key' },
    { id: 4, text: 'Avoid using array index as the key' },
  ];

  return (
    <div style={{ backgroundColor: '#d4edda', padding: '20px', borderRadius: '10px', maxWidth: '400px', margin: 'auto', marginTop:'-300px' }}>
      <h3 style={{ textAlign: 'center' }}>The "React Way" to Render a List</h3>
      <ul style={{ listStyle: 'none', padding: 0 }}>
        {points.map((point) => (
          <li
            key={point.id}
            style={{
              marginBottom: '10px',
              display: 'flex',
              alignItems: 'center',
              fontSize: '16px',

            }}
          >
            <span style={{ color: 'green', marginRight: '10px' }}>✔</span>
            {point.text}
          </li>
        ))}
      </ul>
    </div>
  );
};

export default ListView;
