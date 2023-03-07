---
statblock: true
name: 'Purple Worm - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Monstrosity
cr: 15
ac: 18
hp: 247
hit_dice: '15d20 + 90'
speed: '50 ft., burrow 20 ft.'
stats:
    - 28
    - 8
    - 22
    - 2
    - 10
    - 4
saves:
    - { strength: 14 }
    - { constitution: 11 }
    - { intelligence: 1 }
    - { wisdom: 5 }
    - { charisma: 2 }
senses: 'blindsight 30 ft., tremorsense 60 ft., passive Perception 15'
traits:
    - { name: Tunneler, desc: 'The worm can tunnel through earth and solid rock, leaving behind a 10-foot-diameter tunnel.' }
actions:
    - { name: Multiattack, desc: 'The worm attacks two different targets with its bite and its tail stinger.' }
    - { name: Bite, desc: "Melee Weapon Attack: +14 to hit, reach 10 ft., one target. Hit: 25 (3d10 + 9) piercing damage. If the target is a Large or smaller creature, it makes a DC 19 Dexterity saving throw. On a failure, the target is swallowed. A swallowed creature is blinded and restrained, it has total cover from attacks from outside the worm, and it takes 24 (7d6) acid damage at the start of each of the worm's turns." }
    - { name: 'If a swallowed creature deals 35 or more damage to the worm in a single turn, or if the worm dies, the worm vomits up all swallowed creatures', desc: '' }
    - { name: 'Tail Stinger', desc: 'Melee Weapon Attack: +14 to hit, reach 10 ft., one creature. Hit: 19 (3d6 + 9) piercing damage, and the target makes a DC 19 Constitution saving throw, taking 42 (12d6) poison damage on a failed save or half damage on a success.' }
reactions:
    - { name: 'Fighting Retreat', desc: 'When a creature makes an opportunity attack on the worm, the worm attacks with either its bite or its tail stinger.' }
combat:
    - { name: 'The purple worm usually attacks the foe that makes the most noise, though it may also try to swallow a creature that badly injures it', desc: 'If attacked from one end while in one of its narrow tunnels, it burrows in a tight circle so it can attack with both its bite and stinger. In melee, it retreats and advances in order to get both its attacks in play and to make use of its Fighting Retreat reaction.' }

---
```statblock
monster: Purple Worm - A5E
```
