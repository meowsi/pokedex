import React from 'react';
import "./App.css";

export default class Pokedex extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        error: null,
        isLoaded: false,
        pokemon: []
      };
    }
  
    componentDidMount() {
      fetch("http://localhost:9002/pokedex")
        .then(res => res.json())
        .then(
          (result) => {
            this.setState({
              isLoaded: true,
              pokemon: result
            });
          },

          (error) => {
            this.setState({
              isLoaded: true,
              error
            });
          }
        )
    }
  
    render() {
      const { error, isLoaded, pokemon } = this.state;
      if (error) {
        return <div>Error: {error.message}</div>;
      } else if (!isLoaded) {
        return <div>Loading...</div>;
      } else {
        return (
          <ul>
            {pokemon.map(item => (
              <div className='Container'>
                <div key={item.id}>
                  <div className='Info'>{item.weight}kg {item.height}m</div>
                  <div className='Name'>#{item.number} {item.name}</div>
                  <div className='Type'>
                    <div className={item.type}>{item.type}</div>
                  </div>
                  <div className='Desc'>{item.description}</div>
                </div>
              </div>
            ))}
          </ul>
        );
      }
    }
  }