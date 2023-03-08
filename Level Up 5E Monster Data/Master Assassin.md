---
statblock: true
name: 'Master Assassin'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 17
ac: 18
hp: 143
hit_dice: '22d8 + 44'
speed: '30 ft.'
stats:
    - 20
    - 20
    - 14
    - 15
    - 12
    - 12
saves:
    - { dexterity: 11 }
    - { intelligence: 8 }
    - { wisdom: 7 }
skillsaves:
    - { acrobatics: 11 }
    - { deception: 7 }
    - { perception: 7 }
    - { sleight: 0 }
    - { stealth: 11 }
senses: 'blindsight 20 ft., darkvision 60 ft., passive Perception 17'
languages: 'any three'
traits:
    - { name: 'Crossbow Expert', desc: "The master assassin ignores the loading quality of light crossbows, and being within 5 feet of a hostile creature doesn't impose disadvantage on the master assassin's ranged attack rolls." }
    - { name: 'Deadly Poison', desc: 'As part of making an attack, the master assassin can apply a deadly poison to their weapons (included below). The master assassin carries 3 doses of this poison. A single dose can coat two melee weapons or up to 10 pieces of ammunition.' }
    - { name: 'Death Strike (1/Turn)', desc: 'When the master assassin scores a critical hit against a living creature that is surprised, that creature makes a DC 18 Constitution saving throw. On a failure, it is reduced to 0 hit points. The creature dies if it fails two death saves before it stabilizes.' }
    - { name: 'Epic Assassinate', desc: "During the first turn of combat, the master assassin has advantage on attack rolls against any creature that hasn't acted. Any hit the master assassin scores against a surprised creature is a critical hit, and every creature that can see the master assassin's attack is rattled until the end of the master assassin's next turn." }
    - { name: Evasion, desc: 'When the master assassin makes a Dexterity saving throw against an effect that deals half damage on a success, they take no damage on a success and half damage on a failure.' }
    - { name: 'Sneak Attack (1/Turn)', desc: "The master assassin deals an extra 28 (8d6) damage when they hit with a weapon attack while they have advantage on the attack, or when the master assassin's target is within 5 feet of an ally of the master assassin while the master assassin doesn't have disadvantage on the attack." }
actions:
    - { name: Multiattack, desc: 'The master assassin attacks twice.' }
    - { name: Shortsword, desc: 'Melee Weapon Attack: +11 to hit, reach 5 ft., one target. Hit: 8 (1d6 + 5) piercing damage. The target makes a DC 19 Constitution saving throw, taking 17 (5d6) poison damage on a failure, or half as much damage on a success.' }
    - { name: 'Light Crossbow', desc: 'Ranged Weapon Attack: +11 to hit, range 80/320 ft., one target. Hit: 9 (1d8 + 5) piercing damage. The target makes a DC 19 Constitution saving throw, taking 17 (5d6) poison damage on a failure, or half as much damage on a success.' }
'bonus actions':
    - { name: 'Cunning Action', desc: 'The assassin takes the Dash, Disengage, Hide, or Use an Object action.' }
    - { name: 'Rapid Attack', desc: 'The assassin attacks with their shortsword.' }
    - { name: 'Master assassins always get their mark', desc: 'These killers never play fair, and aim to kill before they are ever seen. They have far more money and resources than the average contract killer, allowing them access to rare, potent poisons.' }

---
```statblock
monster: Master Assassin
```
