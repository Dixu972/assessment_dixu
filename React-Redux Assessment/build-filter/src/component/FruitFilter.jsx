import React, { useState } from 'react';

const FruitFilter = () => {
    const [searchTerm, setSearchTerm] = useState('');
    const fruits = ['Banana', 'Apple', 'Orange', 'Mango', 'Pineapple', 'Watermelon'];

    const handleChange = (e) => {
        setSearchTerm(e.target.value);
    };


    const filteredFruits = fruits.filter((fruit) =>
        fruit.toLowerCase().includes(searchTerm.toLowerCase())
    );

    return (
        <div>
            <input
                type="text"
                placeholder="Search..."
                value={searchTerm}
                onChange={handleChange}
            />
            <ul>

                {filteredFruits.map((fruit, index) => (
                    <li key={index}>{fruit}</li>
                ))}
            </ul>
        </div>
    );
};

export default FruitFilter;
