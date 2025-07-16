import React, { useState } from 'react';

function TrendingTabs() {
  const [activeTab, setActiveTab] = useState('lus');

  return (
    <div className="trending-tabs">
      {/* Tabs */}
      <div className="tab-buttons">
        <button
          className={activeTab === 'lus' ? 'active' : ''}
          onClick={() => setActiveTab('lus')}
        >
          Les plus lus
        </button>
        <div className={`tab-content ${activeTab === 'lus' ? 'active' : ''}`}>
          <div class ="content-details">
            <div className = "justFirst">
                <h6>DANS LA PRESSE</h6>
                <div class = "d-flex gap-3">
                    <h1>1</h1>
                    <p>Sept millions de dollars saisis à l’Aéroport international de Beyrouth</p>
                </div>
            </div>
            <div className = "justFirst">
                <h6>ÉCONOMIE</h6>
                <div class = "d-flex gap-3">
                    <h1>2</h1>
                   <p> Au Maroc, un ambitieux projet pour ouvrir le Sahel à l'Atlantique</p>
                </div>
            </div>
            <div>
                <h6>LIBAN-ISRAËL</h6>
                <div class = "d-flex gap-3">
                    <h1>3</h1>
                    <p>Proposition de Barrack : deux semaines cruciales pour l'État libanais</p>
                </div>
            </div>
          </div>
        </div>

        <button
          className={activeTab === 'commentes' ? 'active' : ''}
          onClick={() => setActiveTab('commentes')}
        >
          Les plus commentés
        </button>
        <div className={`tab-content ${activeTab === 'commentes' ? 'active' : ''}`}>
         <div class ="content-details">
            <div className = "justFirst">
                <h6>DANS LA PRESSE</h6>
                <div class = "d-flex gap-3">
                    <h1>1</h1>
                    <p>Sept millions de dollars saisis à l’Aéroport international de Beyrouth</p>
                </div>
            </div>
            <div className = "justFirst">
                <h6>ÉCONOMIE</h6>
                <div class = "d-flex gap-3">
                    <h1>2</h1>
                   <p> Au Maroc, un ambitieux projet pour ouvrir le Sahel à l'Atlantique</p>
                </div>
            </div>
            <div>
                <h6>LIBAN-ISRAËL</h6>
                <div class = "d-flex gap-3">
                    <h1>3</h1>
                    <p>Proposition de Barrack : deux semaines cruciales pour l'État libanais</p>
                </div>
            </div>
          </div>
        </div>

        <button
          className={activeTab === 'partages' ? 'active' : ''}
          onClick={() => setActiveTab('partages')}
        >
          Les plus partagés
        </button>
        <div className={`tab-content ${activeTab === 'partages' ? 'active' : ''}`}>
          <div class ="content-details">
            <div className = "justFirst">
                <h6>DANS LA PRESSE</h6>
                <div class = "d-flex gap-3">
                    <h1>1</h1>
                    <p>Sept millions de dollars saisis à l’Aéroport international de Beyrouth</p>
                </div>
            </div>
            <div className = "justFirst">
                <h6>ÉCONOMIE</h6>
                <div class = "d-flex gap-3">
                    <h1>2</h1>
                   <p> Au Maroc, un ambitieux projet pour ouvrir le Sahel à l'Atlantique</p>
                </div>
            </div>
            <div>
                <h6>LIBAN-ISRAËL</h6>
                <div class = "d-flex gap-3">
                    <h1>3</h1>
                    <p>Proposition de Barrack : deux semaines cruciales pour l'État libanais</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default TrendingTabs;
