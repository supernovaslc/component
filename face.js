function List(data) {
    if (!data.show) {
        return null;
    }
    return(
        <div className="list">
            <ul className="list-group">
                <li className="list-group-item">Cài đặt</li>
                <li className="list-group-item">Đăng xuất</li>
            </ul>
        </div>
    )
}

class Face extends React.Component{
    constructor(props){
        super(props);
        this.state = {showList: true}
    }

    showList = () => {
        this.setState(state => ({
            showList: !state.showList
        }))
    }

    render() {
        return (
        <div className="top-facebook">
            <div className="element">
                <div className="triangle" onClick={this.showList}>
                    <i className="fa fa-caret-down"></i>
                </div>
                <List show={this.state.showList} />
            </div>
        </div>
        )
    }
}

ReactDOM.render(
    <Face />,
    document.getElementById('root')
)

