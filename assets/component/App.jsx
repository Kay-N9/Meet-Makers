import React from "react";

export class App extends React.Component {

    // Création du state
    state = // Le state est l'état de notre composant (données surveillées par React)
    {
      cities: [], // liste des villes (vient de la BDD, du back)
      city: '',
      suggestion: '' 
    };

    // Méthode appelé automatiquement par React après le premier render()
    componentDidMount() 
    {
    window.fetch('/api_data')
        .then(function(response)
        {
            return response.json();
        })
        .then((villes) =>
        {
            this.setState({cities: villes});
        });
    }


    onChangeInput = (event) => {

      let suggestions = [];

      if(event.target.value == '')
      {
        this.setState({ city: event.target.value, suggestion: '' });
        return;
      }

      // Parcours de toutes les villes à la recherche de la saisie
      for (let city of this.state.cities)
      {
        // Est-ce que la ville contient la saisie?
        if (city.includes(event.target.value.toLowerCase()) == true)
        // if (city.includes(event.target.value.toLowerCase()) == true)
        //startsWith() permete de rechercher les villes qui COMMENCENT par la saisie
        {
          // Oui, enregistrement de la ville dans les suggestions
          suggestions.push(city);
        }
      }


      // Ca réinjecte la saisie dans city
      this.setState({ 
        city: event.target.value,
        suggestion: suggestions.join() 
      });
    }


    render() {

      return (
        <div className="App">
          <header className="App-header">
            <label htmlFor="city">?</label>
            <input type="text" id="city" value={ this.state.city } onChange={ this.onChangeInput } />
            <p>{ this.state.suggestion }</p>
          </header>
        </div>
      );
    }

  }
