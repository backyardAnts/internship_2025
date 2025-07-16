import React from 'react';
import ReactDOM from 'react-dom/client';
import '../css/app.css';
import 'bootstrap/dist/css/bootstrap.min.css';

import ToggleMenu from './components/ToggleMenu';
import HoveringArrow from './components/HoveringArrow';
import BootstrapCarousel from './components/BootstrapCarousel';
import TrendingTabs from './components/moreRead';

document.addEventListener('DOMContentLoaded', () => {
  const menuMount = document.getElementById('menu-toggle-react');
  if (menuMount) {
    ReactDOM.createRoot(menuMount).render(<ToggleMenu />);
  }

  const arrowMount = document.getElementById('hovering-arrow-react');
  if (arrowMount) {
    ReactDOM.createRoot(arrowMount).render(<HoveringArrow />);
  }

  const carouselMount = document.getElementById('carousel-react');
  if (carouselMount) {
    ReactDOM.createRoot(carouselMount).render(<BootstrapCarousel />);
  }
  const switchMount = document.getElementById('tab-switch');
  if (switchMount) {
    ReactDOM.createRoot(switchMount).render(<TrendingTabs />);
  }
});
