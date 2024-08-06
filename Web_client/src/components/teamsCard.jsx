import React from 'react';

const Card = ({ title, imgUrl, repoURL, description }) => {
  return (
    <div className="team-each-card">
      <a className='teamCard-a-tag' href={repoURL} target="_blank" rel="noopener noreferrer">
        <img src={imgUrl} alt={title} className="team-each-card-img" />
        <div className="team-each-card-body">
          <h5 className="team-each-card-title">{title}</h5>
          <p className="team-each-card-text">{description}</p>
        </div>
      </a>
    </div>
  );
};

export default Card;