pragma solidity 0.4.24;

...............................
...............................
...............................

contract OneGadget is Level {
    ...............................
    
    bool public solved;
    
    function solve(uint8 v, bytes32 r, bytes32 s) public _ {
        require(ecrecover(keccak256("solved"), v, r, s) == 0x2B5AD5c4795c026514f8317c7a215E218DcCD6cF);
        solved = true;
    }

    ...............................
}

...............................
...............................
...............................