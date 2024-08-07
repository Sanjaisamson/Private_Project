import React from 'react';

const Card = ({ title, imgUrl, repoURL, description }) => {
  return (
    <div className="each-card">
      <a className='projectCard-a-tag' href={repoURL} target="_blank" rel="noopener noreferrer">
        <img src={imgUrl} alt={title} className="each-card-img" />
        <div className="each-card-body">
          <h5 className="each-card-title">{title}</h5>
          <p className="each-card-text">{description}</p>
        </div>
      </a>
    </div>
  );
};

export default Card;