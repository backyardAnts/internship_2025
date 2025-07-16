import React, { useState } from 'react';
import { Carousel } from 'react-bootstrap';

function BootstrapCarousel() {
  const [index, setIndex] = useState(0);

  const handleSelect = (selectedIndex) => {
    setIndex(selectedIndex);
  };

  return (
    <>
    <h1>Le Dessin</h1>
    <Carousel activeIndex={index} onSelect={handleSelect} interval={4000} className = "hmm">
      <Carousel.Item>
        <img
          className="d-block w-100"
          src="/images/artFlowe.webp" // ✅ Update with your actual image path
          alt="First slide"
          style={{ height: '500px', objectFit: 'cover' }}
        />
        <Carousel.Caption>
          <h3>First slide label</h3>
          <p>Description of the first slide.</p>
        </Carousel.Caption>
      </Carousel.Item>

      <Carousel.Item>
        <img
          className="d-block w-100"
          src="/images/civilWar.jpg"
          alt="Second slide"
          style={{ height: '500px', objectFit: 'cover' }}
        />
        <Carousel.Caption>
          <h3>Second slide label</h3>
          <p>Description of the second slide.</p>
        </Carousel.Caption>
      </Carousel.Item>

      <Carousel.Item>
        <img
          className="d-block w-100"
          src="/images/trump.webp"
          alt="Third slide"
          style={{ height: '500px', objectFit: 'cover' }}
        />
        <Carousel.Caption>
          <h3>Third slide label</h3>
          <p>Description of the third slide.</p>
        </Carousel.Caption>
      </Carousel.Item>
    </Carousel>
    </>
  );
}

export default BootstrapCarousel;
