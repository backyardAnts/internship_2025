import React, { useState } from 'react';

function HoveringArrow() {
  const links = [
    { label: 'Liban', href: '/article' },
    { label: 'Monde', href: '#' },
    { label: 'Économie', href: '#' },
    { label: 'Culture', href: '#' },
    { label: 'Services', href: '#' },
    { label: 'Vidéos', href: '#' },
  ];

  const [hoveredIndex, setHoveredIndex] = useState(null);

  return (
    <nav className="d-flex flex-wrap align-items-center gap-3">
      {links.map((link, index) => (
        <div
          key={index}
          className="d-flex align-items-center gap-2 me-3"
          onMouseEnter={() => setHoveredIndex(index)}
          onMouseLeave={() => setHoveredIndex(null)}
        >
          {link.label !== 'Économie' && (
            <i className={hoveredIndex === index ? 'fa-solid fa-angle-up' : 'fa-solid fa-angle-down'}></i>
          )}
          <a href={link.href} className="text-dark text-decoration-none">
            {link.label}
          </a>
        </div>
      ))}
    </nav>
  );
}

export default HoveringArrow;
